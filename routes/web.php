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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/videos', 'HomeController@show_videos')->name('home.videos');
Route::get('/fono-tips', 'HomeController@show_fono_tips')->name('home.fono-tips');
Route::get('/imprimibles', 'HomeController@show_imprimibles')->name('home.imprimibles');
Route::get('/noticias', 'HomeController@show_noticias')->name('home.noticias');
