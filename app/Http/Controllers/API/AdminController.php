<?php

namespace App\Http\Controllers\API;

use App\Model\Dealer;
use App\Model\DealerToProduct;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function checkProductInvoice(Request $request){
        $sl_no = 'Uni/'.$request->short_name.'/'.$request->number;
        $product = Product::with('product_to_invoice')->where('sl_no', $sl_no)->first();
        /*return response()->json([
            $product
        ]);*/
        if($product->product_to_invoice->count() > 0){
            return response()->json([
                'invoice' => $product->product_to_invoice
            ]);
        }
        else{
            return response()->json([
                'product' => $product,
                'warranty_void' => $product->warranty_void
            ]);
        }

    }
    public function addProductInvoice(Request $request){
        $product_invoice = new DealerToProduct();
        $product_invoice->dealer_id = Auth::user()->id;
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
}
