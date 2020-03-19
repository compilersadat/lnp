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
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/user_login', 'HomeController@user_login')->name('user_login');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/userpanel', 'HomeController@userpanel')->name('userpanel');
Route::get('/signup', 'HomeController@signup')->name('signup');
Route::get('/ourhistory', 'HomeController@ourhistory')->name('ourhistory');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/allcategories', 'HomeController@allcategories')->name('allcategories');
Route::get('/addcategory', 'HomeController@addcategory')->name('addcategory');
Route::get('/addmenu', 'HomeController@addmenu')->name('addmenu');
Route::get('/allitems', 'HomeController@allitems')->name('allitems');
Route::get('/active_pizza', 'HomeController@active_pizza')->name('active_pizza');
Route::get('/addslider', 'HomeController@addslider')->name('addslider');
Route::get('/allslider', 'HomeController@allslider')->name('allslider');




