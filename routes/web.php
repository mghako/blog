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

Route::get('/', 'PostController@index')->name('home');

Route::get('/home', 'PostController@index')->name('home');
Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::resources([
        'categories' => 'CategoryController',
        'posts' => 'PostController'
    ]);
    Route::get('/profile/{id}', 'ProfileController@index')->name('profiles.show'); // profile route
    // datatable routes
    Route::get('categories-datatable', 'CategoryController@datatable')->name('categories.datatable');
    Route::get('posts-datatable', 'PostController@datatable')->name('posts.datatable');

});

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');