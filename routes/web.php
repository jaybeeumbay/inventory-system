<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;

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

// ProductsController
Route::get('/products',[ProductController::class,'index']);

Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products/create',[ProductController::class,'store']);

// PurchaseController
Route::get('/purchases',[PurchaseController::class,'index']);
Route::get('/purchases/create',[PurchaseController::class,'create']);

// SupplierController
Route::get('/supplier',[SupplierController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
