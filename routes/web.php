<?php

use App\Http\Controllers\DataKlasteringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataProdukController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('users.login');
});

Route::get('register', function () {
    return view('users.register');
});

// data produk
Route::get('dataproduk', [DataProdukController::class, 'index']);
Route::get('createdp', [DataProdukController::class, 'create']);
Route::post('dataproduk', [DataProdukController::class, 'store']);
Route::get('dataproduk/{id}/edit', [DataProdukController::class, 'edit']);
Route::put('dataproduk/{id}', [DataProdukController::class, 'update']);
Route::delete('dataproduk/{id}', [DataProdukController::class, 'destroy']);

//data Klastering
Route::get('dataklastering', [DataKlasteringController::class, 'index']);
Route::get('createdk', [DataKlasteringController::class, 'create']);
Route::post('dataklastering', [DataKlasteringController::class, 'store']);
Route::get('dataklastering/{id}/edit', [DataKlasteringController::class, 'edit']);
Route::put('dataklastering/{id}', [DataKlasteringController::class, 'update']);
Route::delete('dataklastering/{id}', [DataKlasteringController::class, 'destroy']);

// Users
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);
});

