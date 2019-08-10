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
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/tamu', 'TamuController@index');
    Route::post('/tamu/create', 'TamuController@create');
    Route::get('/tamu/{id}/edit', 'TamuController@edit');
    Route::post('/tamu/{id}/update', 'TamuController@update');
    Route::get('/tamu/{id}/delete', 'TamuController@delete');   
    Route::get('/bos', 'TamuController@bos'); 
});



