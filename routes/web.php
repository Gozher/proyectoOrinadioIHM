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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products','ProductController');

Route::resource('Drones','DronesController');
Route::resource('Seguidores','SeguidoresController');

Route::resource('Sumos','SumosController');
Route::resource('Minisumos','MinisumosController');

