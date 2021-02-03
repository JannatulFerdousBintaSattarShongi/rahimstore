<?php

use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;


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
    return view ('master');
});
Route::get('/backend/product/create',[ProductController::class,'create'])->name('backend.product.create');
Route::get('/backend/product/list',[ProductController::class,'list'])->name('backend.product.list');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/backend/product/edit/{id}',[ProductController::class,'edit'])->name('backend.product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('/backend/product/delete/{id}',[ProductController::class,'delete'])->name('backend.product.delete');
Route::post('/backend/product/search',[ProductController::class,'search'])->name('backend.product.search');
