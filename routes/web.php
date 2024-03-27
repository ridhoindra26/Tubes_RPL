<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
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
