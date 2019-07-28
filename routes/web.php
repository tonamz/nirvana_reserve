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
    return view('status.category');
})->name('status');
Route::get('/checkstatus', function () {
    return view('status.checkstatus');
})->name('checkstatus');

Route::get('/reserve', function () {
    return view('reserve.reserve_home');
})->name('reserve');

Route::get('/reserve/{type}', 'ReserveController@reserve')->name('reserveform');
Route::post('/reserve/store/', [
	'as' => 'reserve.store',
    'uses' => 'ReserveController@store']);
    
Route::get('/log', function () {
    return view('log.log');
})->name('log');
