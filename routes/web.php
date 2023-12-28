<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RentalReturnController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('dashboard');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Rute-rute lainnya

    Route::get('/register', [UserController::class, 'showRegistrationForm']);
    Route::post('/register', [UserController::class, 'register']);

    Route::get('/cars', [CarController::class, 'index']);
    Route::get('/cars/create', [CarController::class, 'create']);
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

    Route::get('/bookings', [BookingController::class, 'index']);
    Route::get('/bookings/create', [BookingController::class, 'create']);
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    Route::get('/returns', [RentalReturnController::class, 'index']);
    Route::get('/returns/create', [RentalReturnController::class, 'create']);
    Route::post('/returns', [RentalReturnController::class, 'store'])->name('returns.store');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});