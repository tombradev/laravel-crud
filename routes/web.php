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

use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome'); //default route laravel return views in resources
});

/* Route::get('/siswa', function (index) {

}); */


Route::get('/siswa', 'SiswaController@index');
Route::post('/siswa/create', 'SiswaController@create'); //adding create routes

// creating route for the dyniamically siswa id and arroed to siswacontroller
Route::get('/siswa/{id}/edit','SiswaController@edit');
// creating route for updatting fuction
Route::post('/siswa/{id}/update','SiswaController@update');

