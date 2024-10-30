<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPenjualanController;

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('/logout', [LoginController::class, 'actionLogout'])->name('actionLogout');

Route::middleware('auth')->group(function (){
Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', function(){
//     return view('home.dashboard');




route::get('/user', [UserController::class, 'index']);
route::get('/user/tambah', [UserController::class, 'create']);
route::post('/user/simpan', [UserController::class, 'store']);
route::get('/user/{id}/show', [UserController::class, 'show']);
route::post('/user/{id}/update', [UserController::class, 'update']);
route::get('/user/{id}/delete', [UserController::class, 'destroy']);

route::get('/pelanggan', [PelangganController::class, 'index']);
route::get('/pelanggan/tambah', [PelangganController::class, 'create']);
route::post('/pelanggan/simpan', [PelangganController::class, 'store']);
route::get('/pelanggan/{id}/show', [PelangganController::class, 'show']);
route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
route::get('/pelanggan/{id}/delete', [PelangganController::class, 'destroy']);

route::get('/produk', [ProdukController::class, 'index']);
route::get('/produk/tambah', [ProdukController::class, 'create']);
route::post('/produk/simpan', [ProdukController::class, 'store']);
route::get('/produk/{id}/show', [ProdukController::class, 'show']);
route::post('/produk/{id}/update', [ProdukController::class, 'update']);
route::get('/produk/{id}/delete', [ProdukController::class, 'destroy']);

route::get('/penjualan', [PenjualanController::class, 'index']);
route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
route::get('/penjualan/{id}/show', [PenjualanController::class, 'show']);
route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
route::get('/penjualan/{id}/delete', [PenjualanController::class, 'destroy']);

route::get('/detail_penjualan', [DetailPenjualanController::class, 'index']);
route::get('/detail_penjualan/tambah', [DetailPenjualanController::class, 'create']);
route::post('/detail_penjualan/simpan', [DetailPenjualanController::class, 'store']);
route::get('/detail_penjualan/{id}/show', [DetailPenjualanController::class, 'show']);
route::post('/detail_penjualan/{id}/update', [DetailPenjualanController::class, 'update']);
route::get('/detail_penjualan/{id}/delete', [DetaiPenjualanController::class, 'destroy']);


    
});
