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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/allproducts', [App\Http\Controllers\Admin::class, 'getallproducts']);
Route::post('/saveproducts', [App\Http\Controllers\Admin::class, 'saveproducts']);
Route::post('/deleteproducts', [App\Http\Controllers\Admin::class, 'deleteproducts']);
Route::post('/getproductsdatabyid', [App\Http\Controllers\Admin::class, 'getproductsdatabyid']);
Route::post('/updateproductsdata', [App\Http\Controllers\Admin::class, 'updateproductsdata']);
