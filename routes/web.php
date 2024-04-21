<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\LayananController;
use App\Models\Post;


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
    return view('loginPage');
});

Route::get('/', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/', [LoginController::class, 'getLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [dashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/lowongan', [lowonganController::class, 'lowongan'])->middleware('auth')->name('lowongan');
Route::get('/lowongan/add', [lowonganController::class, 'editlowongan'])->middleware('auth');
Route::get('/lowongan/{id}', [lowonganController::class, 'lowongandetail'])->middleware('auth');
Route::post('/lowongan/addLowongan', [lowonganController::class, 'addLowongan'])->middleware('auth')->name('addLowongan');
Route::post('/lowongan/editLowongan/{id}', [lowonganController::class, 'edit'])->middleware('auth');
Route::get('/lowongan/delete/{id}', [lowonganController::class, 'deletelowongan'])->middleware('auth')->name('deletelowongan');

Route::get('/layanan', [LayananController::class,'layanan']);
Route::get('/layanan/info', [LayananController::class, 'infoLayanan']);
Route::get('/layanan/deskripsi', [LayananController::class, 'descLayanan']);
Route::get('/layanan/additional', [LayananController::class, 'additional']);
Route::get('/layanan/review', [LayananController::class, 'review']);
Route::get('/layanan/qna', [LayananController::class, 'qna']);
Route::post('/layanan/add', [LayananController::class, 'addLayanan']);
Route::get('/layanan/delete/{id}', [LayananController::class, 'deleteLayanan']);
Route::get('/layanan/{id}', [LayananController::class, 'layanandetail']);
Route::post('/layanan/editLayanan/{id}', [LayananController::class, 'edit']);
