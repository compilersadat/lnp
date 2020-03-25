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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login','AdminLoginController@login')->name('admin.login');
    Route::post('login','AdminLoginController@adminLogin')->name('admin.login.post');
    Route::get('home','AdminController@home')->name('admin.home');
    Route::resource('categories', 'CategoryController');
    Route::get('category-delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::resource('offers', 'OfferController');
    Route::get('offer-delete/{id}', 'OfferController@delete')->name('offer.delete');
    Route::resource('slides', 'SlideController');
    Route::resource('sizes', 'VariableController');
    Route::get('size-delete/{id}', 'VariableController@delete')->name('size.delete');
    Route::resource('menus', 'ItemController');
    Route::get('item-delete/{id}', 'ItemController@delete')->name('item.delete');

});