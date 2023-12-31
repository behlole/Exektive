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

Route::get('/', 'WebsiteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('banners', 'BannerController');
Route::resource('who_we_ares', 'WhoWeAreController');
Route::resource('influencer_cards', 'InfluencerCardController');
Route::resource('brands', 'BrandController');
Route::resource('contactuses', 'ContactUsController');
Route::resource('messages', 'MessageController');
Route::post('messages/guest', 'MessageController@storeGuest')->name('messages.storeGuest');
Route::get('/contact-us', 'WebsiteController@contactUs')->name('contact');
