<?php

use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehiculo\RegisterVehiculoController;
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
    return view('welcome');
});

Route::get('/register', [RegisterController::class,'show']);

Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show']);

Route::post('/login', [LoginController::class,'register']);



Route::get('/register-vehiculo', [RegisterVehiculoController::class,'show']);
Route::post('/register-vehiculo', [RegisterVehiculoController::class,'create'])->name ('vehiculos.store');
