<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;

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
Route::get('/',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('profile',[AdminController::class,'profile'])->name('profile');
Route::get('/profile/edit/{id}',[AdminController::class,'edit']);
Route::post('/admin/{id}',[AdminController::class,'update'])->name('update');
Route::get('/kategori',[KategoriController::class,'index'])->name('kategori');
Route::get('/kategori/vw_create',[KategoriController::class,'vw_create']);
Route::post('/kategori/create',[KategoriController::class,'create'])->name('create');
Route::post('/kategori/edit/{id}',[KategoriController::class,'edit']);

