<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomentarController;

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

// Halaman Admin
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('admin/login', [AuthController::class, 'showLogin']);
Route::get( 'registrasi', [AuthController::class, 'showRegistrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// Halaman Admin 
Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('artikel/filter', [ArtikelController::class, 'filter']);
Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);
Route::resource('komentar', KomentarController::class);

});
Route::post('client.index' , [ClientArtikelController::class, 'clientfilter']);
Route::get('admin/komentar', [KomentarController::class, 'index']);


// Halaman Admin Artikel
Route::get('admin/artikel', [ArtikelController::class, 'index']);
Route::get('admin/artikel/create', [ArtikelController::class, 'create']);
Route::post('admin/artikel', [ArtikelController::class, 'store']);
Route::get('admin/artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('admin/artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('admin/artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('admin/artikel/{artikel}', [ArtikelController::class, 'destroy']);


// Halaman Admin Komentar
Route::get('admin/komentar', [KomentarController::class, 'index']);
Route::get('admin/komentar/create', [KomentarController::class, 'create']);
Route::post('admin/komentar', [KomentarController::class, 'store']);
Route::get('admin/komentar/{komentar}', [KomentarController::class, 'show']);
Route::get('admin/komentar/{komentar}/edit', [KomentarController::class, 'edit']);
Route::put('admin/komentar/{komentar}', [KomentarController::class, 'update']);
Route::delete('admin/komentar/{komentar}', [KomentarController::class, 'destroy']);

// Halaman Admin Kategori
Route::get('admin/kategori', [KategoriController::class, 'index']);
Route::get('admin/kategori/create', [KategoriController::class, 'create']);
Route::post('admin/kategori', [KategoriController::class, 'store']);
Route::get('admin/kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('admin/kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('admin/kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('admin/kategori/{kategori}', [KategoriController::class, 'destroy']);

// Halaman Client
Route::get('index', [ClientArtikelController::class, 'index']);
Route::get('/', [ClientArtikelController::class, 'index']);
Route::get('/komentar/{artikel}', [ClientArtikelController::class, 'create']);
Route::post('komentar', [ClientArtikelController::class, 'store']);
Route::get('pesanan', [ClientArtikelController::class, 'lihat']);
Route::get('/detail/{artikel}', [ClientArtikelController::class, 'show']);
Route::get('pesanan/edit/{artikel}', [ClientArtikelController::class, 'edit']);
Route::put('pesanan/{artikel}', [ClientArtikelController::class, 'update']);
Route::delete('pesanan/{artikel}', [ClientArtikelController::class, 'destroy']);



// Halaman Admin User
Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('admin/user', [UserController::class, 'store']);
Route::get('admin/user/{user}', [UserController::class, 'show']);
Route::get('admin/user/{user}/edit', [UserController::class, 'edit']);
Route::put('admin/user/{user}', [UserController::class, 'update']);
Route::delete('admin/user/{user}', [UserController::class, 'destroy']);



// Login Section
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);
// Halaman Login
Route::get('login', [AuthController::class, 'showLogin']);

// Halaman Registrasi
Route::get('registrasi', [AuthController::class, 'showRegistrasi']);