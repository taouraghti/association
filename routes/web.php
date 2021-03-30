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

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@home')->name('home');

    });

Route::middleware(['guest'])->group(function () {

    Route::get('/', 'HomeController@index')->name('welcome');
    Route::post('/logged', 'LoginController@logged')->name('user.logged');
    Route::post('/registred', 'RegisterController@register')->name('user.register');

});
