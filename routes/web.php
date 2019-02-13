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
    return view('auth.login');
});
Route::get('/ControlPanel', 'ControlController@index')->name('ControlPanel');

Route::get('/ManageUsers', 'ManageUsersController@index')->name('ManageUsers');

Route::get('/ManageAnnounce', 'ManageAnnounceController@index')->name('ManageAnnounce');

Route::get('/ManageTrip', 'ManageTripController@index')->name('ManageTrip');

Route::get('/ManageGift', 'ManageGiftController@index')->name('ManageGift');

Route::get('/ManageProduct', 'ManageProductController@index')->name('ManageProduct');

Route::get('/ManageStock', 'ManageStockController@index')->name('ManageStock');

Route::get('/ManageCom', 'ManageComController@index')->name('ManageCommotion');

