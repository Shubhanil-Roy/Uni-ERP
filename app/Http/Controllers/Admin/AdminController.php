<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\Dealer;
use App\Model\ManufacturePlace;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Carbon\Carbon;
use App\Model\DealerToProduct;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required'

        ]);

        // store in the database
        $admins = new Admin();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password=bcrypt($request->password);

        $admins->save();


        return redirect()->route('admin.auth.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function products(){
        return view('pages.products');
    }
    public function addproducts(){
        $factories = ManufacturePlace::all();
        return view('pages.add-products')->with([
            'factories' => $factories
        ]);
    }
    public function allproducts(){
        $products = Product::all();

        return view('pages.all-products')->with([
            'products' => $products,

        ]);
    }

    /*public function print(){
        $print = Product::all();
        return view('pages.print-products')->with([
            'prints' => $print
        ]);
    }*/
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
        return redirect()->route('allproducts');
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
        return redirect()->route('allproducts');
    }

    public function ViewProduct($id){
        $viewProduct = Product::where('id',$id)->first();
        $factories = ManufacturePlace::all();
        return view('pages.view-all-products')->with([
            'viewProduct' => $viewProduct,
            'factories' => $factories
        ]);
    }
    public function deleteProduct(Request $request){
        Product::findOrFail($request->id)->delete();
        return back();
    }

    public function addManufactureStore(Request $request){
        $addManufacture = new ManufacturePlace();
        $addManufacture->name =$request->name;
        $addManufacture->short_name = $request->short_name;
        $addManufacture->address = $request->address;
        $addManufacture->phone = $request->phone;
        $addManufacture->email = $request->email;
        $addManufacture->save();
        return back();

    }
    public function allManufacture(){
        $factories = ManufacturePlace::all();
        return view('pages.all-manufacture')->with([
            'factories' => $factories
        ]);
    }
    public function addManufacture(){
        return view('pages.add-manufacture');
    }
    public function dropFactory(Request $request){
        ManufacturePlace::findOrFail($request->id)->delete();
        return back();
    }
    public function addDealerPage(){
        return view('pages.add-dealer');
    }
    public function addDealerPost(Request $request){
        $dealer = new Dealer();
        $dealer->name = $request->name;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->password = bcrypt($request->password);
        $dealer->save();
        return back();
    }
    public function allDealers(){
        $dealers = Dealer::all();
        return view('pages.all-dealers')->with([
            'dealers' => $dealers
        ]);
    }
    public function dropDealer(Request $request){
       Dealer::find($request->id)->delete();
        return view('pages.all-dealers');
    }
    public function dropProduct(Request $request){
        Product::find($request->id)->delete();
        return redirect()->route('allproducts');
    }


    public function printPDF()
    {
        // This  $data array will be passed to our PDF blade
        $abc = Product::all();
        $data = [
            'title' => 'Generate PDF',
            'heading' => 'Invoices from UNILUXX',
            'content' => 'Product',
            'abc' => $abc
            ];

        $pdf = PDF::loadView('pages.pdf_view', $data);
        return $pdf->download('uni-invoice.pdf');
    }

    public function printlayout(){
        $product = Product::all();
        return view('pages.final-print')->with([
            'products' => $product
        ]);
    }
    public function particularProductPost(Request $request){

        $products = Product::where('name',$request->name)->get();

        return view('pages.printOneProduct')->with([
            'products' => $products
        ]);
    }
    public function particularProduct(Request $request,$id){
        $product = Product::where('id',$request->id)->get();
        return view('pages.all-test')->with([
            'products' =>$product
        ]);
    }

    public function datewiseProductPrint(){
        return view('pages.datewiseProductPrint');
    }

    public function printproducts(){
        $products = Product::all();
        return view('pages.print-all-products')->with([
            'products' => $products
        ]);
    }
    public function printOneProduct(Request $request){
        $product = Product::all();
        return view('pages.printOneProduct')->with([
            'products' => $product
        ]);
    }
    public function dateWisePrintPost(Request $request){
        $start_date = new Carbon($request->start_date);
        $end_date = new Carbon($request->end_date);
        $start_date = $start_date->format('Y-m-d')." 00:00:00";
        $end_date = $end_date->format('Y-m-d')." 00:00:00";

        $products = Product::whereBetween('manufacturing_date', [$start_date, $end_date])->get();

        return view('pages.dateWisePrint')->with([
            'products' => $products,
            'type' => 'dated',
            'start_date_request' => $request->start_date,
            'end_date_request' => $request->end_date
        ]);
    }


    public function pdfview(Request $request)
    {
        $product = Product::all();
        return view('pages.pdf_view')->with([
            'abc'=> $product
        ]);

        if($request->has('download')){
            $pdf = PDF::loadView('pages.pdf_view');
            return $pdf->download('pdfview.pdf');
        }
        return view('pages.pdf_view');
    }

    public function warranty(){
        return view('pages.warranty-claim');
    }

    public function warrantyclaimPost(Request $request){
       // dd($request);

         $product = DealerToProduct::where('invoice_no', $request->invoice_no)->with('dealer_to_products_to_products')->get()->first();
       // $products= Product::with('product_to_invoice','getWarrantyVoidAttribute')->get()->first();
        $sold_date = new Carbon($request->start_date);
        $today_date = new Carbon($request->end_date);
        /*$warranty = $request->warranty_time;*/
        $sold_date = $sold_date->format('Y-m-d')." 00:00:00";
        $today_date = $today_date->format('Y-m-d')." 00:00:00";
       // dd($product);

        //if($product->invoice_date->count()>0){
        if(!empty((array) $product)){
            $date = $product->invoice_date;
            $mod_date = strtotime($date."+ ".$product->dealer_to_products_to_products->warranty_time." years");
           // return $mod_date;
            {
                if ($mod_date <= $today_date){
                    return  /*view('pages.warrantyClaimPage')->with([*/
                        'Product is In Warranty'
                        /*])*/;
                }else{
                    return 'Product is Out Of Warranty';
                    /*return view('pages.warrantyClaimPage')->with([
                        'products'=> $product,
                        'message'=>'Product is Out Of Warranty'
                    ]);*/
                }
            }
        }
        else{
            return 'no invoice';
        }
        //dd($mod_date);

        /*if($product->warranty_time->count() > 0){
            //$date = $product->product_to_invoice->invoice_date;
            $date = $product->sold_date;
            $mod_date = strtotime($date."+ ".$product->warranty_time." years");
            return $mod_date;
        }
        else{
            return 'no invoice';
        }*/

      return view('pages.warrantyClaimPage')->with([
            'type' => 'dated',
            'start_date_request' => $request->start_date,
            'end_date_request' => $request->end_date,
            'products' =>$product,
            'warranty_time_request' => $request->warranty_time,
          'today' => $today_date
        ]);


    }

    public function sales(){
        return view('pages.saleschart');
    }




}
