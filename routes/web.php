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

Route::get('/', 'HomeController@index');
Route::get('/product-detail/{id}', 'ProductController@detail');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::prefix('users')->group(function () {
        Route::get('/add', 'Admin\UserController@add');
        Route::post('/add', 'Admin\UserController@add');
        Route::get('/edit', 'Admin\UserController@edit');
        Route::post('/edit', 'Admin\UserController@edit');
        Route::get('/', 'Admin\UserController@index');
        Route::get('/delete', 'Admin\UserController@delete');
    });
    Route::prefix('category')->group(function () {
        Route::get('/add', 'Admin\CategoryController@add');
        Route::post('/add', 'Admin\CategoryController@add');
        Route::get('/edit', 'Admin\CategoryController@edit');
        Route::post('/edit', 'Admin\CategoryController@edit');
        Route::get('/', 'Admin\CategoryController@index');
        Route::get('/delete', 'Admin\CategoryController@delete');
    });

    Route::prefix('filter_type')->group(function () {
        Route::get('/add', 'Admin\FilterTypeController@add');
        Route::post('/add', 'Admin\FilterTypeController@add');
        Route::get('/edit', 'Admin\FilterTypeController@edit');
        Route::post('/edit', 'Admin\FilterTypeController@edit');
        Route::get('/', 'Admin\FilterTypeController@index');
        Route::get('/delete', 'Admin\FilterTypeController@delete');
    });

    Route::prefix('products')->group(function () {
        Route::get('/add', 'Admin\ProductController@add');
        Route::post('/add', 'Admin\ProductController@add');
        Route::get('/edit', 'Admin\ProductController@edit');
        Route::post('/edit', 'Admin\ProductController@edit');
        Route::get('/', 'Admin\ProductController@index');
        Route::get('/delete', 'Admin\ProductController@delete');
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
