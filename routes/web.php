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


return view('auth.login');

});

Route::get('/inicio', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products','ProductController');





Route::get('/caldrones', 'DronesController@index2');



Route::get('/caldrones', 'DronesController@index2')->name('caldrones');

Route::get('/resDrones', 'DronesController@index2');
Route::post('/resDronesPost', 'DronesController@index2');


Route::resource('Drones','DronesController');




Route::get('/resSeguidores','SeguidoresController@index2');
Route::post('/resSeguidoresPost','SeguidoresController@index2');
Route::resource('Seguidores','SeguidoresController');



Route::get('/resSumos','SumosController@index2');
Route::get('/resMinisumos','MinisumosController@index2');
Route::resource('Sumos','SumosController');
Route::resource('Minisumos','MinisumosController');

Route::post('/Hdrones','HdronController@index');
Route::resource('Hdron','HdronController');

Route::post('/Hseguidor','HseguidoresController@index');
Route::resource('Hseguidores','HseguidoresController');

// Sumos Historial 

Route::post('/Hsumos','HsumoController@index');
Route::resource('Hsumo','HsumoController');

Route::post('/Hminisumos','HminisumoController@index');
Route::resource('Hminisumo','HminisumoController');



Route::get('/sumo-pdf','SumosController@pdf')->name('roles.pdf');


Route::get('/eliminar','SumosController@destroy');







