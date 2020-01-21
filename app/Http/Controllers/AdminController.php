<?php

namespace App\Http\Controllers;

use App\Model\ManufacturePlace;
use App\Model\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products(){
        return view('pages.products');
    }
    public function addproducts(){
        return view('pages.add-products');
    }
    public function allproducts(){
        return view('pages.all-products');
    }
    public function addproductsStore(Request $request){

        $addproductsStore = new Product();
        $addproductsStore->identity = $request->identity;
        $addproductsStore->name = $request->name;
        $addproductsStore->length = $request->length;
        $addproductsStore->width = $request->width;
        $addproductsStore->height = $request->height;
        $addproductsStore->price = $request->price;
        $addproductsStore->manufacturing_date = $request->manufacturing_date;
        $addproductsStore->manufacturing_place_id = $request->manufacturing_place_id;
        $addproductsStore->sl_no = $request->sl_no;
        $addproductsStore->warranty_time = $request->warranty_time;
        $addproductsStore->save();
        return redirect()->route('allproducts');
    }
    public function deleteProduct(Request $request){
            Product::find($request->id)->delete();
            return redirect()->route('allproducts');
    }

    public function addManufactureStore(Request $request){
        $addManufacture = new ManufacturePlace();
        $addManufacture->name =$request->name;
        $addManufacture->short_name = $request->short_name;
        $addManufacture->address = $request->address;
        $addManufacture->phone = $request->phone;
        $addManufacture->email = $request->email;
        $addManufacture->save();
        return redirect()->route('allManufacture');

    }
    public function allManufacture(){
        return view('pages.all-manufacture');
    }
    public function addManufacture(){
        return view('pages.add-manufacture');
    }


}
