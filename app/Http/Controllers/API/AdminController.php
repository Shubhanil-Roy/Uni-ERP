<?php

namespace App\Http\Controllers\API;

use App\Model\Dealer;
use App\Model\DealerToProduct;
use App\Model\ManufacturePlace;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function addDealer(Request $request){
        $dealer = new Dealer();
        $dealer->name = $request->name;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->password = bcrypt($request->password);
        $dealer->save();
        return response()->json([
            'dealer' => $dealer
        ],200);
    }
    public function dealers(){
        $dealer = Dealer::all();
        return response()->json([
           'dealers' => $dealer
        ]);
    }
    public function checkProductInvoice(Request $request){
        $sl_no = 'Uni/'.$request->short_name.'/'.$request->number;
        $product = Product::with('product_to_invoice')->where('sl_no', $sl_no)->first();
        /*return response()->json([
            $product
        ]);*/
	$product->is_sold = true;
        $product->save();
        return response()->json([
            'product' => $product
        ], 200);
       /*if($product->product_to_invoice->count() > 0){
            return response()->json([
                'invoice' => $product->product_to_invoice
            ]);
        }
        else{
            return response()->json([
                'product' => $product,
                'warranty_void' => $product->warranty_void
            ]);
        }*/

    }
    public function addProductInvoice(Request $request){
        $product_invoice = new DealerToProduct();
        //$product_invoice->dealer_id = Auth::user()->getAuthIdentifier();
        $product_invoice->dealer_id = $request->dealer_id;
        $product_invoice->invoice_no = $request->invoice_no;
        $product_invoice->product_id = $request->product_id;
        $product_invoice->invoice_date = $request->invoice_date;
        $product_invoice->name = $request->name;
        $product_invoice->phone = $request->phone;
        $product_invoice->email = $request->email;
        $product_invoice->address = $request->address;
        $product_invoice->save();
        return response()->json([
            'invoice' => $product_invoice
        ]);
    }
    public function ProductInvoice(){
        $dp = DealerToProduct::all();
        return response()->json([
            'product' => $dp
        ]);
    }
/*
    public function addproductsStore(Request $request){
        $factory = ManufacturePlace::find($request->manufacturing_place_id);
        $addproductsStore = new Product();
        $addproductsStore->identity = $request->identity;
        $addproductsStore->name = $request->name;
        $addproductsStore->length = $request->length;
        $addproductsStore->width = $request->width;
        $addproductsStore->height = $request->height;
        $addproductsStore->quantity = $request->quantity;
        $addproductsStore->price = $request->price;
        $addproductsStore->manufacturing_date = $request->manufacturing_date;
        $addproductsStore->manufacturing_place_id = $request->manufacturing_place_id;
        $serialno = 'Uni/'.$factory->short_name.'/'.rand(10000,99999);
        $present = Product::where('sl_no', $serialno)->first();
        if($present){
            $serialno = 'Uni/'.$factory->short_name.'/'.rand(10000,99999);
        }
        $addproductsStore->sl_no = $serialno;
        $addproductsStore->warranty_time = $request->warranty_time;
        $addproductsStore->qr_code = base64_encode(QrCode::generate(url('/').'/api/'.$serialno));
        $addproductsStore->save();
        return response()->json([
            'addproduct'=>$addproductsStore
        ]);
    }

    public function UpdateProductsStore(Request $request){
        $factory = ManufacturePlace::find($request->manufacturing_place_id);
        $updateproductsStore = Product::find($request->id);
        $updateproductsStore->identity = $request->identity;
        $updateproductsStore->name = $request->name;
        $updateproductsStore->length = $request->length;
        $updateproductsStore->width = $request->width;
        $updateproductsStore->height = $request->height;
        $updateproductsStore->quantity = $request->quantity;
        $updateproductsStore->price = $request->price;
        $updateproductsStore->manufacturing_date = $request->manufacturing_date;
        $updateproductsStore->manufacturing_place_id = $request->manufacturing_place_id;
        $serialno = 'Uni/'.$factory->short_name.'/'.rand(10000,99999);
        $present = Product::where('sl_no', $serialno)->first();
        if($present){
            $serialno = 'Uni/'.$factory->short_name.'/'.rand(10000,99999);
        }
        $updateproductsStore->sl_no = $serialno;
        $updateproductsStore->warranty_time = $request->warranty_time;
        $updateproductsStore->qr_code = base64_encode(QrCode::generate(url('/').'/api/'.$serialno));
        $updateproductsStore->save();
        return response()->json([
            'updateproduct'=>$updateproductsStore
        ]);
    }

    public function allproducts(){
        $products = Product::all();
        return response()->json([
            'products' => $products,

        ]);
    }

    public function ViewProduct($id){
        $viewProduct = Product::where('id',$id)->first();
        $factories = ManufacturePlace::all();
        return response()->json([
            'viewProduct' => $viewProduct,
            'factories' => $factories
        ]);
    }
    public function deleteProduct($id){
        Product::where('id',$id)->delete();
        return response()->json([
            'message' => 'Successfully Removed'
        ]);

    }
    */

    public function addManufactureStore(Request $request){
        $addManufacture = new ManufacturePlace();
        $addManufacture->name =$request->name;
        $addManufacture->short_name = $request->short_name;
        $addManufacture->address = $request->address;
        $addManufacture->phone = $request->phone;
        $addManufacture->email = $request->email;
        $addManufacture->save();
        return response()->json([
            'addFactory' => $addManufacture
        ]);

    }
    public function allManufacture(){
        $factories = ManufacturePlace::all();
        return response()->json([
            'factories' => $factories
        ]);
    }



}
