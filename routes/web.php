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

// Route::get('/', function () {
//     return view('welcome');
// });

//view
Route::get('/','HomeController@index')
	->name('home');
Route::get('/about','AboutController@index')
	->name('about');
Route::get('/promo','PromoController@index')
	->name('promo');
Route::get('/blog','BlogController@index')
	->name('blog');
Route::get('/contact','ContactController@index')
	->name('contact');
//admin 
Route::prefix('admin')
	->namespace('Admin')
	->group(function(){
		Route::get('/','DashboardController@index')
		->name('dashboard');
	});