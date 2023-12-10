<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [BerandaController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'postLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// 
Route::get('/dashboard', [BerandaController::class, 'showBeranda'])->name('dashboard')->middleware(['auth', 'role:admin,PMasuk,PKeluar,PRuang']);

// Admin
Route::get('/users', [BerandaController::class, 'showUsers'])->name('users')->middleware(['auth', 'role:admin']);

Route::get('/tambahpegawai', [BerandaController::class, 'showTambahPegawai'])->name('tambahpegawai')->middleware(['auth', 'role:admin']);
Route::post('/tambahpegawai', 'App\Http\Controllers\UsersController@tambahPegawai')->name('posttambahpegawai')->middleware(['auth', 'role:admin']);

Route::get('/editpegawai/{id}', [BerandaController::class, 'showEditPegawai'])->name('editPegawai')->middleware(['auth', 'role:admin']);
Route::post('/editpegawai', 'App\Http\Controllers\UsersController@editPegawai')->name('posteditpegawai')->middleware(['auth', 'role:admin']);
Route::get('/hapuspegawai/{id}', 'App\Http\Controllers\UsersController@hapusPegawai')->name('hapusPegawai')->middleware(['auth', 'role:admin']);