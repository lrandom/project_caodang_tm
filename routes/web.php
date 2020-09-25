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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::prefix('users')->group(function () {
        Route::get('/add', 'Admin\UserController@add');
        Route::post('/add', 'Admin\UserController@add');
        Route::get('/','Admin\UserController@index');
        Route::get('/delete','Admin\UserController@delete');
    });
});
