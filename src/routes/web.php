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

Route::get('/', function () {
    return view('welcome');
});

// 一覧画面表示
Route::get('/products', [MogitateController::class, 'index']);
// 詳細画面表示
Route::get('/products/{product}', [MogitateController::class, 'detail'])->name('product.detail');
// 登録画面表示
Route::get('/products/register', [MogitateController::class, 'create']);
// 検索機能
Route::get('/product/search', [MogitateController::class, 'index'])->name('product.search');