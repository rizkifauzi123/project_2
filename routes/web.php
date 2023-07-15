<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SupplierController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});
// oute::get('/home',[HomeController::class,'index']);

Route::get('/dashboard',[DashboardController::class, 'index']);
// Route::get('/dashboard2',[DashboardController::class, 'index2']);


// Jenis Produk
Route::get('/dashboard/jenis_produk',[JenisProdukController::class, 'index'])->middleware('auth');
Route::get('/dashboard/jenis_produk/create',[JenisProdukController::class, 'create'])->middleware('auth');
Route::post('/dashboard/jenis_produk/store',[JenisProdukController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/jenis_produk/destroy/{id}',[JenisProdukController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/jenis_produk/edit/{id}', [JenisProdukController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/jenis_produk/update/{id}', [JenisProdukController::class, 'update'])->middleware('auth');
// Route::get('/dashboard/jenis_produk/show/{id}', [JenisProdukController::class, 'show']);

// Produk
Route::get('/dashboard/produk',[ProdukController::class, 'index'])->middleware('auth');
Route::get('/dashboard/produk/create',[ProdukController::class, 'create'])->middleware('auth');
Route::post('/dashboard/produk/store',[ProdukController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/produk/destroy/{id}',[ProdukController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/produk/edit/{id}', [ProdukController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/produk/update/{id}', [ProdukController::class, 'update'])->middleware('auth');
Route::get('/dashboard/produk/show/{id}', [ProdukController::class, 'show'])->middleware('auth');


// Pesanan
Route::get('/dashboard/pesanan',[PesananController::class, 'index']);
Route::get('/dashboard/pesanan/create',[PesananController::class, 'create']);
Route::post('/dashboard/pesanan/store',[PesananController::class, 'store']);
Route::delete('/dashboard/pesanan/destroy/{id}',[PesananController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/pesanan/edit/{id}', [PesananController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/pesanan/update/{id}', [PesananController::class, 'update'])->middleware('auth');

//Supplier
Route::get('/dashboard/supplier',[SupplierController::class, 'index'])->middleware('auth');
Route::get('/dashboard/supplier/create',[SupplierController::class, 'create'])->middleware('auth');
Route::post('/dashboard/supplier/store',[SupplierController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/supplier/destroy/{id}',[SupplierController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/supplier/edit/{id}', [SupplierController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/supplier/update/{id}', [SupplierController::class, 'update'])->middleware('auth');
Route::get('/dashboard/supplier/show/{id}', [SupplierController::class, 'show'])->middleware('auth');

//Pembelian
Route::get('/dashboard/pembelian',[PembelianController::class, 'index'])->middleware('auth');
Route::get('/dashboard/pembelian/create',[PembelianController::class, 'create'])->middleware('auth');
Route::post('/dashboard/pembelian/store',[PembelianController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/pembelian/destroy/{id}',[PembelianController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/pembelian/edit/{id}', [PembelianController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/pembelian/update/{id}', [PembelianController::class, 'update'])->middleware('auth');
Route::get('/dashboard/pembelian/show/{id}', [PembelianController::class, 'show'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
