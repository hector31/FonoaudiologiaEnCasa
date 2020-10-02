<?php 

use Illuminate\Support\Facades\Route;

Route::get('/login','UserController@login')->name('users.login');
Route::get('/registrarse','UserController@register')->name('users.register');

Route::put('/users/{user}/update','UserController@update')->name('user.profile.update');
Route::delete('/users/{user}/destroy','UserController@destroy')->name('user.destroy');

Route::middleware('role:Super admin')->group(function(){
    Route::get('/users','UserController@index')->name('users.index');

    Route::put('/users/{user}/attach','UserController@attach')->name('user.role.attach');
    Route::put('/users/{user}/detach','UserController@detach')->name('user.role.detach');

});

Route::middleware(['can:view,user'])->group(function(){
    Route::get('/users/{user}/profile','UserController@show')->name('user.profile.show');

});