<?php 

use Illuminate\Support\Facades\Route;


    Route::get('/pacientes', 'PacientesController@index')->name('pacientes.index');
    Route::get('/paciente/show/{user}/publicacion','PublicacionesPacientesController@show')->name('pacientes.show.publicacion');
    Route::get('/paciente/show/publicacion','PublicacionesPacientesController@show_mis_publicaciones')->name('pacientes.show.mis.publicaciones');
    Route::get('/paciente/show/one/{post}/publicacion','PublicacionesPacientesController@show_one')->name('post.one.publicacion.show');
    
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