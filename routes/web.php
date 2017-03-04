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



Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/lostitems', function(){
        return view ('lostitems');
    });

    // Login/home routes
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/add', 'HomeController@add');
    Route::post('/add', 'HomeController@submitadd');

});
