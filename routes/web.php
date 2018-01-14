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
    return view('welcome');
});

Route::group(['prefix' => 'chat'], function () {

    Route::get('/{threadID?}', "MainController@index");

    Route::get('groups', function () {
        return "Groups";
    });

    Route::post('store', 'MainController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
