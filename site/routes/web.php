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

Route::get('/menus', 'UserController@menu')->name('menu');
Route::get('/cart', 'UserController@cart')->name('cart');
Route::get('/shop/{id}', 'UserController@shop')->name('shop');
Route::post('/add-to-cart/{id}','OrderController@addToCart')->name('add.cart');
Route::post('/profile-update', 'UserController@updatePro')->name('prof');
Route::post('/search', 'UserController@search')->name('search');
Route::get('/contact-us', 'UserController@contact')->name('contact');
Route::post('/contact', 'UserController@mail')->name('mail');
Route::get('/redirect/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/{service}', 'Auth\LoginController@callback');
Route::get('/cart-incre/{id}','OrderController@cartIncr')->name('incr.cart');
Route::get('/cart-dec/{id}','OrderController@cartDecr')->name('dec.cart');
Route::get('/cart-rem/{id}','OrderController@remCart')->name('rem.cart');



Route::group(['prefix' => 'admin'], function () {
    Route::resource('coupens', 'CoupenController');
    Route::get('coupen-delete/{id}', 'CoupenController@delete')->name('coupen.delete');
    Route::get('login','AdminLoginController@login')->name('admin.login');
    Route::post('login','AdminLoginController@adminLogin')->name('admin.login.post');
    Route::get('home','AdminController@home')->name('admin.home');
    Route::resource('categories', 'CategoryController');
    Route::get('category-delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::resource('offers', 'OfferController');
    Route::get('offer-delete/{id}', 'OfferController@delete')->name('offer.delete');
    Route::resource('slides', 'SlideController');
    Route::get('slide-delete/{id}', 'SlideController@delete')->name('slide.delete');
    Route::resource('sizes', 'VariableController');
    Route::get('size-delete/{id}', 'VariableController@delete')->name('size.delete');
    Route::resource('menus', 'ItemController');
    Route::get('item-delete/{id}', 'ItemController@delete')->name('item.delete');
    Route::get('item-status/{id}', 'ItemController@changeStatus')->name('menu.status');
    Route::resource('toppings', 'ToppingValueController');
    Route::get('topping-delete/{id}', 'ToppingValueController@delete')->name('topping.delete');
    Route::resource('prices', 'ToppingPriceController');
    Route::get('price-delete/{id}', 'ToppingPriceController@delete')->name('price.delete');
});