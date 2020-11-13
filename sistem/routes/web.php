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

route::get('template', [HomeController::class, 'showTemplate']);
route::get('kategori', [HomeController::class, 'showKategori']);
route::get('login', [AuthController::class, 'showLogin']);

route::get('produk', [ProdukController::class, 'index']);
route::get('produk/create', [ProdukController::class, 'create']);
route::post('produk', [ProdukController::class, 'store']);
route::get('produk/{produk}', [ProdukController::class, 'show']);
route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
route::put('produk/{produk}', [ProdukController::class, 'update']);
route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
