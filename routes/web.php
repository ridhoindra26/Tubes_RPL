<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\lowonganController;
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
Route::post('/lowongan/editlowongan/{id}', [lowonganController::class, 'edit'])->middleware('auth');
Route::get('/lowongan/delete/{id}', [lowonganController::class, 'deletelowongan'])->middleware('auth')->name('deletelowongan');