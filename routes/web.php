<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::resource('/user', UserController::class);

Route::controller(ProdukController::class)->group(function(){
    Route::get('/produk', 'index');
    Route::get('/produk/masuk', 'masuk');
    Route::post('/produk', 'store');
});
