<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;


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



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/pengguna', [DataController::class, 'index']);
});

Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
});

route::get('/', [LoginController::class, 'index'])->name('login');
route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');
route::post('/', [LoginController::class, 'logout'])->name('logout');


route::get('/registration', [RegistrationController::class, 'index']);
route::post('/registration', [RegistrationController::class, 'store']);
