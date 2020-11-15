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

route::get('template', [HomeController::class, 'showTemplate']);
route::get('kategori', [HomeController::class, 'showKategori']);

route::get('produk', [ProdukController::class, 'index']);
route::get('produk/create', [ProdukController::class, 'create']);
route::post('produk', [ProdukController::class, 'store']);
route::get('produk/{produk}', [ProdukController::class, 'show']);
route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
route::put('produk/{produk}', [ProdukController::class, 'update']);
route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

route::get('user', [UserController::class, 'index']);
route::get('user/create', [UserController::class, 'create']);
route::post('user', [UserController::class, 'store']);
route::get('user/{user}', [UserController::class, 'show']);
route::get('user/{user}/edit', [UserController::class, 'edit']);
route::put('user/{user}', [UserController::class, 'update']);
route::delete('user/{user}', [UserController::class, 'destroy']);

route::get('login', [AuthController::class, 'showLogin']);
route::post('login', [AuthController::class, 'loginProcess']);

route::get('register', [AuthController::class, 'showRegister']);
route::post('register', [AuthController::class, 'registerProcess']);
