<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/admindashboard', "admin.admindashboard");
Route::get('/allusers', [App\Http\Controllers\Admin::class, 'index']);
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/addnewcategory', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/savecategory', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/updatecategory/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('/deletecategory/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);
// Route::get('/allusers',  [App\Http\Controllers\HomeController::class, 'index']);
// Route::post('/allusers',  [App\Http\Controllers\HomeController::class, 'index']);
// Route::put('/allusers',  [App\Http\Controllers\HomeController::class, 'index']);
// Route::patch('/allusers',  [App\Http\Controllers\HomeController::class, 'index']);
// Route::delete('/allusers',  [App\Http\Controllers\HomeController::class, 'index']);
// Route::resource('/allusers',  [App\Http\Controllers\HomeController::class]);
// Route::view('/allusers', "view_blade_page_name");

Route::view('/ajaxproducts', 'admin.ajaxproducts');

Route::view('/sendmailtestview', 'admin.sendmailtestview');
Route::any('/sendmailtest', [App\Http\Controllers\Admin::class, 'sendmail']);
Route::view('/prodinsertformiddleware', 'admin.prodinsertformiddleware');
Route::view('/custommacro', 'admin.custommacro');
Route::any('/middlewaretest', function (){
    dd("MiddelwareCorrect");
})->middleware("checkprodprice");

Route::resource('category', 'App\Http\Controllers\CategoryControllerResource');
// Route::resource('category',  function (){
//     dd("Called");
// });
