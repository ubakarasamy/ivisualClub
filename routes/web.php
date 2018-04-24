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

//pages
Route::get('/', 'PagesController@index')->name('home');

//Authentication 
Auth::routes();

//admin access 
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor')->group(function () {
Route::resource('posts', 'PostController');
});

// user access
Route::get('/home', 'HomeController@index')->name('dashboard');



