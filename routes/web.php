<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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

Route::prefix('admin')->group(function(){
    Route::get('beranda', [HomeController::class, 'showBeranda']);
    Route::get('kategori', [HomeController::class, 'showKategori']);
});

Route::prefix('admin')->group(function(){
    Route::get('produk', [ProdukController::class, 'index']);
    Route::get('produk/create', [ProdukController::class, 'create']);
    Route::post('produk', [ProdukController::class, 'store']);
    Route::get('produk/{produk}', [ProdukController::class, 'show']);
    Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
    Route::put('produk/{produk}', [ProdukController::class, 'update']);
    Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

});

Route::prefix('admin')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);

});

Route::prefix('admin')->group(function(){
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

});

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);