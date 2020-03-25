<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('qrcode', function () {
    return base64_decode(base64_encode(QrCode::generate(url('/').'/Uni')));
});
Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('register', 'Admin\AdminController@store')->name('admin.register.store');
    Route::get('login', 'Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.auth.logout');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.auth.logout');

});

Route::post('addproductsStore','Admin\AdminController@addproductsStore')->name('addproductsStore')->middleware('auth:admin');
Route::get('addproducts', 'Admin\AdminController@addproducts')->name('addproducts')->middleware('auth:admin');
Route::get('allproducts', 'Admin\AdminController@allproducts')->name('allproducts')->middleware('auth:admin');
/*Route::get('printproducts', 'Admin\AdminController@printproducts')->name('printproducts');*/
Route::get('printlayout', 'Admin\AdminController@printlayout')->name('printlayout')->middleware('auth:admin');
Route::get('dropProduct{id}', 'Admin\AdminController@dropProduct')->name('dropProduct')->middleware('auth:admin');

Route::get('testproducts', 'Admin\AdminController@testproducts')->name('testproducts')->middleware('auth:admin');
Route::get('datewiseProductPrint', 'Admin\AdminController@datewiseProductPrint')->name('datewiseProductPrint')->middleware('auth:admin');
Route::post('dateWisePrintPost', 'Admin\AdminController@dateWisePrintPost')->name('dateWisePrintPost')->middleware('auth:admin');

Route::get('addfactory', 'Admin\AdminController@addManufacture')->name('addManufacture')->middleware('auth:admin');
Route::get('allfactories', 'Admin\AdminController@allManufacture')->name('allManufacture')->middleware('auth:admin');
Route::post('addfactory', 'Admin\AdminController@addManufactureStore')->name('addManufactureStore')->middleware('auth:admin');
Route::get('dropfactory/{id}', 'Admin\AdminController@dropFactory')->name('dropFactory')->middleware('auth:admin');

Route::get('adddealer', 'Admin\AdminController@addDealerPage')->name('addDealerPage')->middleware('auth:admin');

Route::post('addDealerPost', 'Admin\AdminController@addDealerPost')->name('addDealerPost')->middleware('auth:admin');
Route::get('allDealers', 'Admin\AdminController@allDealers')->name('allDealers')->middleware('auth:admin');
Route::get('dropDealer/{id}', 'Admin\AdminController@dropDealer')->name('dropDealer')->middleware('auth:admin');

Route::get('/index', function () {

    $pdf = PDF::loadView('invoice');
    return $pdf->download('invoice.pdf');
    /*return view('welcome');*/
});

Route::get('/customer/print-pdf', [ 'as' => 'customer.printpdf',
                  'uses' => 'Admin\AdminController@printPDF']);

Route::get('pdfview',array('as'=>'pdfview','uses'=>'Admin\AdminController@pdfview'));

