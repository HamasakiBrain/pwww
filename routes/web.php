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
//  NEWS

Route::get('/news', 'PostsController@index')->name('news');
Route::get('/news/{slug}', 'PostsController@slug')->name('slug');

// PAGES

Route::get('/pages', 'PagesController@index');
Route::get('/pages/{slug}', 'PagesController@slug');

// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
