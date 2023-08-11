<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Member\MemberController;

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

Route::get('auth/google', [MemberController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [MemberController::class, 'handleGoogleCallback'])->name('google.callback');

Route::middleware(['auth.memberorguest'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('landing.index');
});
