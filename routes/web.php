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
Route::get('/','HomeController@index')->name('home');
Route::get('/test','HomeController@test');
//Route::resource('home', 'HomeController');
Route::post('store','HomeController@store')->name('store');
Route::post('upp','HomeController@update')->name('update');
Route::post('up_sub','HomeController@updateSub')->name('update.sub');
Route::post('dell','HomeController@destroy')->name('destroy');
Route::post('dell1','HomeController@destroySub')->name('destroy.sub');
Route::post('dell2','HomeController@destroySsub')->name('destroy.ssub');
Route::post('store_sub','HomeController@storeSub')->name('store.sub');
Route::post('store_ssub','HomeController@storeSSub')->name('store.ssub');
Route::post('up_ssub','HomeController@updateSsub')->name('update.ssub');


