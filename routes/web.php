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
    return view('welcome');
});
/*Route::get('/', 'Anil@index');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home1');
Route::get('/home2', 'HomeController@index2')->name('home2');
Route::get('/home3', 'HomeController@index3')->name('home3');
// Route::get('/home4', 'HomeController@index')->name('home4');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/tables', 'HomeController@tables')->name('tables');
Route::get('/typography', 'HomeController@typography')->name('typography');
Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/maps', 'HomeController@maps')->name('maps');
Route::get('/notifications', 'HomeController@notifications')->name('notifications');

Route::get('/Font_office_Submit_call_log', 'FontOfficeController@store')->name('Font_office_Submit_call_log');

