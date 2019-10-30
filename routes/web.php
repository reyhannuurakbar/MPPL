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

Route::get('/','TestController@Home');
//Route::get('/Home','Controllerhref@Home');
Route::get('/about','TestController@About');
Route::get('/food_menu','TestController@Food_Menu');
Route::get('/chefs','TestController@Chefs');
Route::get('/blog','TestController@Blog');
Route::get('/single-blog','TestController@SingleBlog');
Route::get('/elements','TestController@Elements');
Route::get('/contact','TestController@Contact');
