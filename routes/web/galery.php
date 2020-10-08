<?php 

use Illuminate\Support\Facades\Route;


    Route::get('/galery', 'GaleryController@index')->name('galery.index');
    Route::get('/galery/create', 'GaleryController@create')->name('galery.create');
    Route::post('/galery', 'GaleryController@store')->name('galery.store');

    Route::delete('/galery/{galery_post}/delete', 'GaleryController@destroy')->name('galery.destroy');
