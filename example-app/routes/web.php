<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/masuk',[HomeController::class,'store']);
Route::get('/update/{id}',[HomeController::class,'edit']);
Route::post('/change/{id}',[HomeController::class,'change']);
Route::post('/delete/{id}',[HomeController::class,'hapuse']);