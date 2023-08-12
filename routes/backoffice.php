<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\User\UserController;

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

Route::get('/', [AuthenticationController::class, 'login'])->name('sign-in');
Route::post('/doLogin', [AuthenticationController::class, 'doLogin'])->name('doLogin');
Route::get('/sign-up', [AuthenticationController::class, 'register'])->name('sign-up');

Route::middleware(['auth.backoffice'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

    Route::resource('user', 'Backend\User\UserController');
});
