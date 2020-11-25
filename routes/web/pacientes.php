<?php 

use Illuminate\Support\Facades\Route;


    Route::get('/pacientes', 'PacientesController@index')->name('pacientes.index');
    
    Route::middleware(['can:view,user'])->group(function(){
        Route::get('/pacientes/{user}/profile','PacientesController@show')->name('paciente.profile.show');
    
    });

    
Route::middleware('role:Super admin')->group(function(){
    Route::put('/paciente/{user}/attach','PacientesController@attach')->name('paciente.role.attach');
    Route::put('/paciente/{user}/detach','PacientesController@detach')->name('paciente.role.detach');
    Route::get('/paciente/{user}/publicaciones','PacientesController@publicaciones')->name('pacientes.publicaciones');


    Route::post('/publicacion', 'PublicacionesPacientesController@store')->name('publicacion.pacientes.store');

    Route::get('/publicacion/{post}/{user}/edit', 'PublicacionesPacientesController@edit')->name('publicacion.pacientes.edit');
    Route::delete('/publicacion/{post}/delete', 'PublicacionesPacientesController@destroy')->name('publicacion.pacientes.destroy');
    Route::patch('/publicacion/{post}/{user}/update', 'PublicacionesPacientesController@update')->name('publicacion.pacientes.update');

});