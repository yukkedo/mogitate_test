<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MogitateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products', [MogitateController::class, 'index']);
Route::get('/products/{product}', [MogitateController::class, 'detail'])->name('product.detail');
Route::get('/product/search', [MogitateController::class, 'index'])->name('products.search');
Route::patch('/products/{product}/update', [MogitateController::class, 'update'])->name('products.update');
Route::delete('/products/{product}/delete', [MogitateController::class, 'destroy'])->name('products.delete');
Route::get('/products/register', [MogitateController::class, 'create'])->name('products.register');
