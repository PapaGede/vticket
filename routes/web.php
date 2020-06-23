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
Route::get('services','PagesController@getService');
Route::get('about','PagesController@getAbout');
Route::get('details','PagesController@getDetails');
Route::resource('customers','CustomerController');


Route::get('/', function () {
    return view('layouts.welcome');
});

