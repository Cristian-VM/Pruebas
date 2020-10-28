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



Route::get('Categorias','CategoriasControler@index');
Route::post('Categorias','CategoriasControler@store');
Route::get('Categorias/create','CategoriasControler@create');
Route::get('Categorias/{categoria}/show','CategoriasControler@show');
Route::put('Categorias/{categoria}','CategoriasControler@update');
Route::delete('Categorias/{categoria}','CategoriasControler@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasControler@edit');
//Route::resource('Categorias','CategoriasControler');


