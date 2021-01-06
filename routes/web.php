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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('categories-datatable', 'CategoryController@datatable')->name('categories.datatable');
Route::get('posts-datatable', 'PostController@datatable')->name('posts.datatable');

// profile route
Route::get('/profile/{id}', 'ProfileController@index');
Route::resources([
    'categories' => 'CategoryController',
    'posts' => 'PostController'
]);