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
    return view('index');
});

Route::get('/entidades', 'EntidadesController@index')
    ->name('entidades');

Route::get('/entidades/{ent}', 'EntidadesController@show')
                  ->where('entidad', '[0-9]+')
                  ->name('entidadeshow');


Route::get('/memorias', 'MemoriasController@index')
->name('memorias');    

Route::get('/about', 'AboutController@index')
    ->name('sobre');    

    
Route::get('/contacto', 'ContactoController@index')
->name('contacto');    


Route::get('/feipobol', 'FeipobolController@index')
->name('feipobol');    

Route::get('/noticias', 'NoticiaController@index')
->name('noticias');    

Route::get('/cursos', 'CursoController@index')
->name('cursos');    
