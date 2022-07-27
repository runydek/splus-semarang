<?php

use App\Http\Controllers\DataKlasteringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReportController;



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
})->middleware('auth');

Route::get('login', function () {
    return view('users.login');
});



// Users
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');

    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store'])->name('register');
});


Route::middleware(('auth'))->group(function () {
    // data produk
    Route::get('dataproduk', [DataProdukController::class, 'index']);
    Route::post('dataproduk/store', [DataProdukController::class, 'store']);
    Route::get('dataproduk/{id}/edit', [DataProdukController::class, 'edit']);
    Route::delete('dataproduk/{id}', [DataProdukController::class, 'destroy']);
    Route::get('createdp', [DataProdukController::class, 'create']);
    Route::put('dataproduk/{id}', [DataProdukController::class, 'update']);

    // data klastering
    Route::get('dataklastering', [DataKlasteringController::class, 'index']);
    Route::get('/reports', [DataKlasteringController::class, 'store']);
    Route::delete('reports/{id}', [DataKlasteringController::class, 'destroy']);

    Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');
    Route::get('report', [ReportController::class, 'index']);
    Route::get('report-cluster/{id}', [ReportController::class, 'klaster']);

});


