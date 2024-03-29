<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
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

Route::get('/lowongan', [LowonganController::class, 'lowongan'])->middleware('auth')->name('lowongan');
Route::get('/lowongan/add', [LowonganController::class, 'editlowongan'])->middleware('auth');
Route::get('/lowongan/{id}', [LowonganController::class, 'lowongandetail'])->middleware('auth');
Route::post('/lowongan/addlowongan', [LowonganController::class, 'addlowongan'])->middleware('auth')->name('addlowongan');
Route::post('/lowongan/editlowongan/{id}', [LowonganController::class, 'edit'])->middleware('auth');
Route::get('/lowongan/delete/{id}', [LowonganController::class, 'deletelowongan'])->middleware('auth')->name('deletelowongan');

Route::get('/artikel', [artikelController::class, 'artikel'])->middleware('auth')->name('artikel');
Route::get('/artikel/add', [artikelController::class, 'editArtikel'])->middleware('auth');
Route::get('/artikel/{id}', [artikelController::class, 'articledetail'])->middleware('auth');
Route::post('/artikel/addArtikel', [artikelController::class, 'addArtikel'])->middleware('auth')->name('addArtikel');
Route::post('/artikel/editArtikel/{id}', [artikelController::class, 'edit'])->middleware('auth');
Route::get('/artikel/delete/{id}', [artikelController::class, 'deleteArtikel'])->middleware('auth')->name('deleteArtikel');
