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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacto', 'HomeController@contacto')->name('contacto')->middleware('admin');

Route::get('/productos', 'HomeController@productos')->name('productos')->middleware('admin');

//Route::get('/home', 'HomeController@index')->name('home');
