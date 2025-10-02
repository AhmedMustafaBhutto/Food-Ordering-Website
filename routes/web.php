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
    return view('index');
});
Route::get('first/{id}', 'first@index');
Route::view('/about','about');
Route::view('/login','login');
Route::post('/login','userController@login');
Route::view('/register','register');
Route::post('/register','userController@register');
Route::get('/speciality', 'specialityController@index');
Route::post('/speciality', 'specialityController@store');
Route::get('/speciality/{id}', 'specialityController@show');
Route::get('/addCategory', 'specialityController@create');
Route::get('/AddFood/{id}', 'foodController@create');
Route::post('/AddFood/{id}', 'foodController@store');
Route::view('/categoryitems','categoryitems');
Route::view('/popular','popular');
Route::view('/cart','cart');
Route::view('/about','about');

