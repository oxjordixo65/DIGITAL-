<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('login', function () {
    return view('login/login');
});

Route::post('canal', function () {
    return view('canal/afegeixCanal');
});

Route::get('canalGet', function () {
    return view('canal/afegeixCanal');
});
//Route::resource('logintxt','login/login.txt');


Route::resource('canal', 'canalctl');

Route::resource('programa', 'programactl');

Route::resource('graella', 'graellactl');

Route::resource('alumn', 'alumnctl');
