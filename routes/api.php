<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['json.response','cors']], function () {

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::middleware('auth:api')->group(function () {
Route::resource('/banner','App\Http\Controllers\BannerController');
Route::resource('/category','App\Http\Controllers\CategoryController');
Route::resource('/subCategory','App\Http\Controllers\SubCategoryController');
Route::resource('/product','App\Http\Controllers\ProductController');
Route::resource('/rider','App\Http\Controllers\RiderController');
Route::resource('/orderItem','App\Http\Controllers\OrderItemController');
Route::resource('/order','App\Http\Controllers\OrderController');
Route::resource('/store','App\Http\Controllers\StoreController');
Route::get('/pendingOrder','App\Http\Controllers\OrderController@pending');
Route::get('/completeOrder','App\Http\Controllers\OrderController@complete');
Route::resource('/delivery','App\Http\Controllers\DeliveryController');
Route::post('/review','App\Http\Controllers\ReviewController@store');
       	
});
});


