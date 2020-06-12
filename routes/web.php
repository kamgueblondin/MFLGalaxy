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
Route::get('/our_goals', "PagesController@our_goals")->name('our_goals');
Route::get('/our_services', "PagesController@our_services")->name('our_services');
Route::get('/testimonials', "PagesController@testimonials")->name('testimonials');
Route::get('/blogs', "PagesController@blogs")->name('blogs');
Route::get('/legal_documents', "PagesController@legal_documents")->name('legal_documents');
Route::get('/french', "PagesController@french")->name('french');
Route::get('/spanish', "PagesController@spanish")->name('spanish');
Route::get('/deutsch', "PagesController@deutsch")->name('deutsch');
Route::get('/gallery', "PagesController@gallery")->name('gallery');
Route::get('/class_structure', "PagesController@class_structure")->name('class_structure');
Route::get('/extension_classes', "PagesController@extension_classes")->name('extension_classes');
Route::get('/adult_classes', "PagesController@adult_classes")->name('adult_classes');
Route::get('/target_schools', "PagesController@target_schools")->name('target_schools');
Route::get('/useful_links', "PagesController@useful_links")->name('useful_links');
Route::get('/faq', "PagesController@faq")->name('faq');
Route::get('/enquiry_form', "PagesController@enquiry_form")->name('enquiry_form');
Route::get('/more_infos', "PagesController@more_infos")->name('more_infos');

Auth::routes();

Route::get('language/{lang}', 'HomeController@language')->name('language');
Route::get('/home', 'DashboardController@index')->name('home');

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
	
});