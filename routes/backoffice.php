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
    Route::get('/post/faq', 'Backend\Post\PostController@faq')->name('post.faq');
    Route::get('/post/term-condition', 'Backend\Post\PostController@termCondition')->name('post.term-condition');
    Route::get('/post/privacy-policy', 'Backend\Post\PostController@privacyPolicy')->name('post.privacy-policy');
    Route::get('/post/edit/{type}', 'Backend\Post\PostController@edit')->name('post.edit');
    Route::post('/post/update/{post}', 'Backend\Post\PostController@update')->name('post.update');

    Route::get('/site', 'Backend\Site\SiteController@index')->name('site.index');
    Route::post('/site/update/{site}', 'Backend\Site\SiteController@update')->name('site.update');
});
