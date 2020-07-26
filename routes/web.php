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
Route::get('/','PagesController@index')->name('pages.index');
Route::get('about','PagesController@getAbout');
Route::get('details','PagesController@getDetails');
Route::resource('customers','CustomerController');
Route::post('customers-authenticate','CustomerController@authenticate')->name('customers-authenticate');
Route::get('getTrips', 'AjaxController@getTrips')->name('getTrips');

Route::get('services','PagesController@getService')->middleware('auth');
//admin routes

Route::prefix('dashboard')->group(function(){

        Route::middleware(['web','admin'])->group(function(){
            Route::get('/','DashboardController@index')->name('dashboard.index');
            Route::resource('region','RegionController');
            Route::resource('trips','TripController');
            Route::resource('buses','BusController');
            Route::resource('orders','OrderController');
            Route::resource('passengers','PassengerController');

        });

});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
