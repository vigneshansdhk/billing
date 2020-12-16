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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('puchase','PuchaseController');
	Route::resource('sales','SaleController');
	Route::get('dashboard','DashboardController@index'); 
	
	//customer route
	Route::get('customers/create','CustomerController@create');
	Route::post('customers','CustomerController@store');
	Route::get('customers/list','CustomerController@index');
	Route::get('customers/all','CustomerController@show');
	Route::get('customers/delete/{id}','CustomerController@destroy');

	//suppliers route
	Route::get('suppliers/create','SupplierController@create'); 
	Route::post('suppliers','SupplierController@store'); 
	Route::get('suppliers/list','SupplierController@index');
	Route::get('suppliers/delete/{id}','SupplierController@destroy');
	 
});

