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

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9cd391ec2ed520f68beedd1b08f20a12a0c0a34

Route::get('/caldrones', 'DronesController@index2');

Route::resource('CalificarSumo','CalificarSumoController');
>>>>>>> fdfaf62e43f4b6752123d7dee0b3408b5ff9fe14

Route::resource('Drones','DronesController');





Route::resource('Seguidores','SeguidoresController');

Route::resource('Sumos','SumosController');
Route::resource('Minisumos','MinisumosController');

