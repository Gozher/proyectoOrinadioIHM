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



Route::get('/resDrones', 'DronesController@index2');
Route::post('/resDronesPost', 'DronesController@index2');
Route::resource('Drones','DronesController');




Route::get('/resSeguidores','SeguidoresController@index2');
Route::post('/resSeguidoresPost','SeguidoresController@index2');
Route::resource('Seguidores','SeguidoresController');

Route::resource('Sumos','SumosController');
Route::resource('Minisumos','MinisumosController');

Route::post('/Hdrones','HdronController@index');
Route::resource('Hdron','HdronController');

Route::post('/Hseguidor','HseguidoresController@index');
Route::resource('Hseguidores','HseguidoresController');



Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

