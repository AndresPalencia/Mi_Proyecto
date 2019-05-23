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

//Route::get('prueba/{num}', 'pruebaController@prueba');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('trainers','trainerController');
//Route::resource('productions', 'productionController');
Route::get('trainers/{trainer}/productions', 'productionController@index');
Route::post('trainers/{trainer}/productions', 'productionController@store');

/*
Comentario: Esto es solo prueba

Route::get('/name/{name}/lastname/{lastname?}', function ($name, $lastname = null) {
    return 'Hola. Mi nombre completo es: '. $name . $lastname;
});

Route::get('/Mi_Primera_Ruta', function () {
    return 'Hola Mundo, Fuck You!';
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
