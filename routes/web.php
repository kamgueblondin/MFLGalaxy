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

Route::get('/test-contact', function () {
    $m=new App\Mail\Contact([
        'subject' => 'Durand',
        'nom' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
        ]);
   Illuminate\Support\Facades\Mail::to('landrynjikam79@gmail.com')
    ->send($m);
});

// Les routes des différentes pages

Route::post('mail','ContactController@storeMail')->name('mail');
Route::get('/about_us', "PagesController@about_us")->name('about_us');
Route::get('/our_goals', "PagesController@our_goals")->name('our_goals');
Route::get('/our_services', "PagesController@our_services")->name('our_services');
Route::get('/testimonials', "PagesController@testimonials")->name('testimonials');
Route::get('/blogs', "PagesController@blogs")->name('blogs');
Route::get('/legal_documents', "PagesController@legal_documents")->name('legal_documents');
Route::get('/french', "PagesController@french")->name('french');
Route::get('/spanish', "PagesController@spanish")->name('spanish');
Route::get('/german', "PagesController@german")->name('german');
Route::get('/gallery', "PagesController@gallery")->name('gallery');
Route::get('/class_structure', "PagesController@class_structure")->name('class_structure');
Route::get('/extension_classes', "PagesController@extension_classes")->name('extension_classes');
Route::get('/adult_classes', "PagesController@adult_classes")->name('adult_classes');
Route::get('/target_schools', "PagesController@target_schools")->name('target_schools');
Route::get('/useful_links', "PagesController@useful_links")->name('useful_links');
Route::get('/faq', "PagesController@faq")->name('faq');
Route::get('/enquiry_form', "PagesController@enquiry_form")->name('enquiry_form');
Route::get('/more_infos', "PagesController@more_infos")->name('more_infos');
Route::post('/faq', 'HomeController@storeFaq')->name('faq');
Route::post('/enquiry_form', 'HomeController@storeEnquiry')->name('enquiry_form');

Auth::routes();

Route::get('language/{lang}', 'HomeController@language')->name('language');
Route::get('/home', 'DashboardController@index')->name('home');

Route::resource('information', 'informationcontroller');

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
    Route::name('information')->get('/information', 'AdminController@information');
    Route::put('information/{id}', 'AdminController@updateInformation')->name('information.update');
    Route::group([
        'prefix' => 'faq_aides',
    ], function () {
        Route::get('/', 'FaqAidesController@index')
             ->name('faq_aides.faq_aides.index');
        Route::get('/create','FaqAidesController@create')
             ->name('faq_aides.faq_aides.create');
        Route::get('/show/{faqAides}','FaqAidesController@show')
             ->name('faq_aides.faq_aides.show');
        Route::get('/{faqAides}/edit','FaqAidesController@edit')
             ->name('faq_aides.faq_aides.edit');
        Route::post('/', 'FaqAidesController@store')
             ->name('faq_aides.faq_aides.store');
        Route::put('faq_aides/{faqAides}', 'FaqAidesController@update')
             ->name('faq_aides.faq_aides.update');
        Route::delete('/faq_aides/{faqAides}','FaqAidesController@destroy')
             ->name('faq_aides.faq_aides.destroy');
    });
    Route::group([
        'prefix' => 'enquiry_aides',
    ], function () {
        Route::get('/', 'EnquiryAidesController@index')
             ->name('enquiry_aides.enquiry_aides.index');
        Route::get('/create','EnquiryAidesController@create')
             ->name('enquiry_aides.enquiry_aides.create');
        Route::get('/show/{enquiryAides}','EnquiryAidesController@show')
             ->name('enquiry_aides.enquiry_aides.show');
        Route::get('/{enquiryAides}/edit','EnquiryAidesController@edit')
             ->name('enquiry_aides.enquiry_aides.edit');
        Route::post('/', 'EnquiryAidesController@store')
             ->name('enquiry_aides.enquiry_aides.store');
        Route::put('enquiry_aides/{enquiryAides}', 'EnquiryAidesController@update')
             ->name('enquiry_aides.enquiry_aides.update');
        Route::delete('/enquiry_aides/{enquiryAides}','EnquiryAidesController@destroy')
             ->name('enquiry_aides.enquiry_aides.destroy');
    });
	Route::group([
    'prefix' => 'blogs',
	], function () {
		Route::get('/', 'BlogsController@index')
			 ->name('blogs.blogs.index');
		Route::get('/create','BlogsController@create')
			 ->name('blogs.blogs.create');
		Route::get('/show/{blogs}','BlogsController@show')
			 ->name('blogs.blogs.show');
		Route::get('/{blogs}/edit','BlogsController@edit')
			 ->name('blogs.blogs.edit');
		Route::post('/', 'BlogsController@store')
			 ->name('blogs.blogs.store');
		Route::put('blogs/{blogs}', 'BlogsController@update')
			 ->name('blogs.blogs.update');
		Route::delete('/blogs/{blogs}','BlogsController@destroy')
			 ->name('blogs.blogs.destroy');
    });
    
    Route::group([
        'prefix' => 'temoignages',
    ], function () {
        Route::get('/', 'TemoignagesController@index')
             ->name('temoignages.temoignages.index');
        Route::get('/create','TemoignagesController@create')
             ->name('temoignages.temoignages.create');
        Route::get('/show/{temoignages}','TemoignagesController@show')
             ->name('temoignages.temoignages.show');
        Route::get('/{temoignages}/edit','TemoignagesController@edit')
             ->name('temoignages.temoignages.edit');
        Route::post('/', 'TemoignagesController@store')
             ->name('temoignages.temoignages.store');
        Route::put('temoignages/{temoignages}', 'TemoignagesController@update')
             ->name('temoignages.temoignages.update');
        Route::delete('/temoignages/{temoignages}','TemoignagesController@destroy')
             ->name('temoignages.temoignages.destroy');
    });
    
    Route::group([
        'prefix' => 'galeries',
    ], function () {
        Route::get('/', 'GaleriesController@index')
             ->name('galeries.galeries.index');
        Route::get('/create','GaleriesController@create')
             ->name('galeries.galeries.create');
        Route::get('/show/{galeries}','GaleriesController@show')
             ->name('galeries.galeries.show');
        Route::get('/{galeries}/edit','GaleriesController@edit')
             ->name('galeries.galeries.edit');
        Route::post('/', 'GaleriesController@store')
             ->name('galeries.galeries.store');
        Route::put('galeries/{galeries}', 'GaleriesController@update')
             ->name('galeries.galeries.update');
        Route::delete('/galeries/{galeries}','GaleriesController@destroy')
             ->name('galeries.galeries.destroy');
    });
    

});