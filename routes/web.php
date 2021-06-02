<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('exercicio', 'ExerciciosController');
Route::get('exercicio/delete/{id}','ExerciciosController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

