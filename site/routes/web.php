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

Route::get('/menus', 'UserController@menu')->name('menu')->middleware('pickup');
Route::get('/alert', 'UserController@alert')->name('alert');
Route::get('/customize/{id}', 'UserController@customize')->name('customize');
Route::get('/cart', 'UserController@cart')->name('cart')->middleware('pickup');
Route::get('/shop/{id}', 'UserController@shop')->name('shop')->middleware('pickup');
Route::post('/add-to-cart/{id}','OrderController@addToCart')->name('add.cart')->middleware('pickup');
Route::post('/profile-update', 'UserController@updatePro')->name('prof');
Route::post('/search', 'UserController@search')->name('search')->middleware('pickup');
Route::get('/contact-us', 'UserController@contact')->name('contact');
Route::post('/contact', 'UserController@mail')->name('mail');
Route::get('/redirect/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/{service}', 'Auth\LoginController@callback');
Route::get('/cart-incre/{id}','OrderController@cartIncr')->name('incr.cart')->middleware('pickup');
Route::get('/cart-dec/{id}','OrderController@cartDecr')->name('dec.cart')->middleware('pickup');
Route::get('/cart-rem/{id}','OrderController@remCart')->name('rem.cart')->middleware('pickup');

Route::post('/cart-custom','OrderController@customCart')->name('custome.cart');
Route::post('/wings-custom','OrderController@CustomWings')->name('wings.cart');
Route::post('/sides-custom','OrderController@sideCustome')->name('sides.cart');
Route::post('/mm-custom','OrderController@mmCart')->name('mm.cart');
Route::post('/shqc-custom','OrderController@shqcCustome')->name('shqc.cart');


Route::post('payment', 'PayPalController@payment')->name('payment')->middleware('pickup');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::post('/refund', 'PayPalController@Refund')->name('payment.refund');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::get('/pickup', 'UserController@setLoc')->name('set.loc');
Route::post('/start', 'UserController@postSetLoc')->name('start');

//apis
Route::get('/count', 'UserController@loadCount')->name('count');
Route::get('/size/{id}', 'UserController@sizeDet')->name('size.det');
Route::get('/item/{id}', 'UserController@getDetail')->name('get.det');
//Route::get('/wings', 'UserController@setWings')->name('setwings');
//admin
Route::group(['prefix' => 'admin'], function () {
    Route::resource('coupens', 'CoupenController');
    Route::get('coupen-delete/{id}', 'CoupenController@delete')->name('coupen.delete');
    Route::post('coupen-check', 'UserController@checkCoupen')->name('coupen.check');
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

    Route::get('currnt-orders/{id}','AdminController@corders')->name('admin.corders');
    Route::get('hold-orders/{id}','AdminController@hldorders')->name('admin.hldorders');
    Route::get('ip-orders/{id}','AdminController@iporders')->name('admin.iporders');
    Route::get('completed-orders/{id}','AdminController@cmorders')->name('admin.cmorders');
    
    
    Route::get('orders','AdminController@horders')->name('admin.horders');
    Route::get('order-status/{id}','AdminController@orderStatus')->name('admin.order.status');
    
    Route::get('customers','AdminController@allUsers')->name('admin.users');
    
    
      Route::resource('sauces', 'SauceController');
    Route::get('sauce-delete/{id}', 'SauceController@delete')->name('sauce.delete');
    
    
    Route::post('/order-status','OrderController@status')->name('order.status');
    
});