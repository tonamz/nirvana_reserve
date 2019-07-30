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
Route::get('/checkstatus/{type}', 'ReserveController@checkstatus')->name('checkstatus');


Route::get('/reserve', function () {
    return view('reserve.reserve_home');
})->name('reserve');

Route::get('/reserve/detail/{id}', 'ReserveController@detail')->name('detail');

Route::get('/reserve/{type}', 'ReserveController@reserve')->name('reserveform');
Route::get('/reserve/unit/{unit}', 'ReserveController@reserveunit')->name('reserveformunit');
Route::post('/reserve/store/', [
	'as' => 'reserve.store',
    'uses' => 'ReserveController@store']);
    
Route::get('/log', function () {
    return view('log.log');
})->name('log');
