<?php
Route::group(['namespace' => 'Webapp', 'middleware' => 'auth'], function() {
    Route::get('/', 'InicioController@index')->name('app.index');
    // TODO: MOVER A RUTAS GROUP
    Route::get('ofertas-laborales', 'Ofertas\OfertasLaboralesController@index')->name('app.ofertas');
    Route::get('perfil', 'Perfil\PerfilController@index')->name('app.perfil');
    Route::get('curriculum', 'Curriculum\CurriculumController@index')->name('app.curriculum');
});

Route::group(['prefix' => 'eventos', 'namespace' => 'Webapp\Eventos'], function () {
    Route::get('/', 'EventosController@index')->name('app.eventos');
    Route::get('evento', 'EventosController@evento')->name('evento.mostrar');
    Route::get('entradas', 'EntradasController@index')->name('evento.entradas');
});

Route::group(['prefix' => 'emprendimiento', 'namespace' => 'Webapp\Emprendimiento'], function () {
    Route::get('/', 'EmprendimientoController@index')->name('app.emprendimiento');
    Route::get('crear', 'EmprendimientoController@crear')->name('emprendimiento.crear');
});