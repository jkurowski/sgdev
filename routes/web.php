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
Route::middleware(['restrictIp'])->group(function () {
    Auth::routes();

    Route::get('routes', function() {
        \Artisan::call('route:list');
        return '<pre>' . \Artisan::output() . '</pre>';
    });

    Route::get('/',
        'Front\IndexController@index')->name('index');

    Route::get('o-nas',
        'Front\AboutController@index')->name('about');

    Route::get('zakup-gruntow',
        'Front\LandController@index')->name('land');

    Route::get('kontakt',
        'Front\ContactController@index')->name('contact.index');
    Route::post('kontakt',
        'Front\ContactController@send')->name('contact.send');

    // Developro
    Route::group(['namespace' => 'Front', 'prefix'=>'/mieszkania', 'as' => 'front.investment.'], function() {

    });

    // Articles
    Route::group(['namespace' => 'Front', 'prefix'=>'/aktualnosci/', 'as' => 'front.news.'], function() {
        Route::get('/',         'ArticleController@index')->name('index');
        Route::get('/{slug}',   'ArticleController@show')->name('show');
    });

});
