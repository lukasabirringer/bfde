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

//listen aller Routes: php artisan route:list


Route::group(['namespace' => 'Frontend'], function () {

		Route::get('/profile/{id}', 'ProfileController@show')->middleware('auth');

});

Route::get('/', function () {
    return view('startseite');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
