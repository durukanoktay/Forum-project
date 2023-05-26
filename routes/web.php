<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

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

Route::prefix('/')->namespace('App\Http\Controllers')->group(function () {
    Route::get('home', 'ForumController@forum');
    Route::get('post', 'ForumController@post');
    Route::get('newtopic', 'ForumController@newtopic');
    Route::get('profile', 'ForumController@profile');
    Route::get('editprofile', 'ForumController@editprofile');
    Route::get('search', 'ForumController@search');
    Route::get('message', 'ForumController@message');
    Route::get('login', 'ForumController@login');
    Route::get('signup', 'ForumController@signup');
    Route::get('announcament', 'ForumController@announcament');
    Route::get('changepas', 'ForumController@changepas');
});