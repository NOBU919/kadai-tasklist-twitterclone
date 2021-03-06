<?php

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

Route::get('/', 'TasksController@index');
//Route::resource('tasks', 'TasksController');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


//未ログイン状態では操作できない
Route::group(['middleware' => ['auth']], function () {
    Route::resource('tasks', 'TasksController');
    //Route::resource('tasks', 'TasksController', ['only' => ['create','edit','show']]);
    //Route::resource('tasklist', 'TasklistController', ['only' => ['show',edit','show']]);
});
