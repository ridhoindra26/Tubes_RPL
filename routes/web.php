<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KatalogController;

use App\Http\Controllers\Controller;
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
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/servicedetail/{id}', [ServiceController::class, 'serviceDetail']);
Route::get('/', [Controller::class, 'index']);
Route::post('/reservasi', [Controller::class, 'addReservasi']);
Route::get('/katalogview', [KatalogController::class, 'index']);
