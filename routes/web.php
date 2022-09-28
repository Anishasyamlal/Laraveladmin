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

Route::get('/','HomeController@index')->name('index');
Route::get('/home','HomeController@home')->name('home');
Route::get('/user register','HomeController@register')->name('register');
Route::post('/user_save','HomeController@save_user')->name('save_user');
