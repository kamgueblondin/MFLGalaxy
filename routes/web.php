<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "HomeController@index");

// Les routes des différentes pages

Route::get('/about_us', "PagesController@about_us")->name('about_us');

Auth::routes();

Route::get('language/{lang}', 'HomeController@language')->name('language');
Route::get('/home', 'DashboardController@index')->name('home');

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
	
});