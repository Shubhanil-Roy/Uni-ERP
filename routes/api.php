<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:dealer-api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('dealers', 'API\AdminController@dealers');
Route::get('ProductInvoice', 'API\AdminController@ProductInvoice')/*->middleware('auth:dealer-api')*/;
Route::get('Uni/{short_name}/{number}', 'API\AdminController@checkProductInvoice');
Route::post('addDealer', 'API\AdminController@addDealer');
Route::post('addInvoice', 'API\AdminController@addProductInvoice')/*->middleware('auth:dealer-api')*/;



Route::get('allManufacture', 'API\AdminController@allManufacture');
Route::get('allproducts', 'API\AdminController@allproducts');
Route::get('ViewProduct/{id}', 'API\AdminController@ViewProduct');

Route::post('addproductsStore', 'API\AdminController@addproductsStore');
Route::post('UpdateProductsStore', 'API\AdminController@UpdateProductsStore');
Route::post('addManufactureStore', 'API\AdminController@addManufactureStore');

