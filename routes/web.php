<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\ForumController;
use App\Http\Controllers\Admin\AdminController;

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


Route::prefix('/')->group(function () {
    Route::match(['get', 'post'], 'register', [ForumController::class, 'register'])->name('register');
    Route::match(['get', 'post'], 'login', [ForumController::class, 'login'])->name('login');
    Route::get('', [ForumController::class, 'home'])->name('home')->name('home');

    Route::middleware('auth')->group(function () {
        Route::get('logout', [ForumController::class, 'logout'])->name('logout');
        Route::get('profile', [ForumController::class, 'profile'])->name('profile');
        Route::get('{forum}/newtopic', [ForumController::class, 'newTopic'])->name('newTopic');
        Route::post('{forum}/newtopic', [ForumController::class, 'createTopic'])->name('createTopic');
    });

    Route::get('{forum}', [ForumController::class, 'showTopic'])->name('showTopic');
});


// Admin Panel
Route::prefix('/admin')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::match(['get', 'post'], 'profile', [AdminController::class, 'profile']);
        Route::post('checkcurrpasswd', [AdminController::class, 'checkcurrpasswd']);
        Route::get('logout', [AdminController::class, 'logout']);
    });
});

Route::get('{forum}/{topic}', [ForumController::class, 'showPost'])->name('showPost');