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

//User
Route::get('/','HomeController@index')
	->name('home');

Route::get('/about','AboutController@index')
	->name('about');

Route::get('/paket','PaketController@index')
	->name('paket');

Route::get('/blog','BlogController@index')
	->name('blog');

Route::get('/details/{slug}','DetailsController@index')
	->name('details');

Route::get('/pay','PayController@index')
	->name('pay');

Route::get('/Pesan', 'PesananController@Pesen');

Route::POST('/insertpesanan','PesananController@add');


Route::get('/chekout','CheckoutController@index')
	->name('chekout');


//Multi auth admin

//admin 
Route::prefix('admin')
	->namespace('Admin')
	->middleware(['auth','admin'])//untuk admin agar yang login itu admin aja
	->group(function(){
		Route::get('/','DashboardController@index')
			->name('dashboard');
		Route::resource('restaurant-package', 'RestaurantPackageController');
		Route::resource('transaksi', 'TransaksiController');
		Route::get('accepted/{id_pesanan}', 'TransaksiController@accepted');
		Route::get('deny/{id_pesanan}', 'TransaksiController@deny');

	});

//Auth

Auth::routes(['verify'=> true]);
