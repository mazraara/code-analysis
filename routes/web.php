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
use RandomPassword\Password;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $password = new Password(10);
    return $password->generate();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');