<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('/home', function () {
    return view('jam.home');
});

Route::get('/loginn', function () {
    return view('jam.loginn');
});

Route::get('/brands', function () {
    return view('jam.brands');
});

Route::get('/registerr', function () {
    return view('jam.registerr');
});

Route::get('/men', function () {
    return view('jam.men');
});

Route::get('/checkout', function () {
    return view('jam.checkout');
});

Route::get('/base', function () {
    return view('admin2.base');
});

Route::get('/promo', function () {
    return view('admin2.promo');
});

Route::get('/login', function () {
    return view('admin2.login');
});

Route::get('/register', function () {
    return view('admin2.register');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);