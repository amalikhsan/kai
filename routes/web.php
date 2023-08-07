<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataAsetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAngbarController;
use App\Http\Controllers\DataAngfasController;

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
    return view('pages.auth.login');
})->middleware(['guest']);

Route::get('/register', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/change-profile-avatar', [DashboardController::class, 'changeAvatar'])->name('change-profile-avatar');
    Route::delete('/remove-profile-avatar', [DashboardController::class, 'removeAvatar'])->name('remove-profile-avatar');

    Route::middleware(['can:admin'])->group(function() {
        Route::resource('user', UserController::class);
    });
    Route::middleware(['can:pimpinan'])->group(function () {
        Route::resource('dataAngbar', DataAngbarController::class);
        Route::resource('dataAngfas', DataAngfasController::class);
        Route::resource('dataAset', DataAsetController::class);
    });
    Route::middleware(['can:manager'])->group(function () {
        Route::resource('dataAngbar', DataAngbarController::class);
        Route::resource('dataAngfas', DataAngfasController::class);
        Route::resource('dataAset', DataAsetController::class);
    });
    Route::middleware(['can:angbar'])->group(function () {
        Route::resource('dataAngbar', DataAngbarController::class);
    });
    Route::middleware(['can:angfas'])->group(function () {
        Route::resource('dataAngfas', DataAngfasController::class);
    });
    Route::middleware(['can:aset'])->group(function () {
        Route::resource('dataAset', DataAsetController::class);
    });
});
