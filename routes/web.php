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

Route::get('/', 'PrincipalController@Show')
    ->name('principal');

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


Route::get('/noticias', 'NoticiasController@index')
->name('noticias');

Route::get('feipobol/noticias', 'FeipobolNoticiasController@index')
->name('fnoticiasShow');

Route::get('feipobol/noticias/{id}', 'FeipobolNoticiasController@show')
->name('fnoticias');

Route::get('feipobol/expositores', 'ExpositoresController@index')
->name('expositores');

Route::get('feipobol/expositores/{id}', 'ExpositoresController@show')
->name('expositoresShow');


Route::get('/noticias/{not}', 'NoticiasController@show')
->name('noticiaShow');

Route::get('/cursos', 'CursosController@index')
->name('cursos');

Route::get('/cursos/{id}', 'CursosController@show')
->name('cursoShow');

Route::get('/feipobol', 'FeipobolController@show')
->name('feipobol');

Route::get('/feipobol/acercade', 'FeipobolAboutController@index')
->name('feipobolAbout');

Route::get('/feipobol/StandsVentas', 'VentasController@index')
->name('ventas');

Route::get('/feipobol/resultados', 'ResultadosController@index')
->name('resultados');

Route::get('/feipobol/noches-de-feria', 'NferiaController@index')
->name('nferia');
