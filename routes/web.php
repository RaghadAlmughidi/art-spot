<?php

use App\Http\Controllers\ProductController;
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

//to open the product's create form 
Route::get('/admin', [ProductController::class, 'create']);
//to store the product's info 
Route::post('/admin', [ProductController::class, 'store']);

//to show the products
Route::get('/gallery', [ProductController::class, 'show']);


