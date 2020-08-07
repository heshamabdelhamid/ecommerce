<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

});

Route::group(['middleware' => 'guest:admin'], function () {

    Route::get('login', 'LoginController@getLogin');
    Route::post('login', 'LoginController@Login')->name('admin.login');

});

