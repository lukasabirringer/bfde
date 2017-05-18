<?php

Route::get('/', function () {
    return view('startseite');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::group(['namespace' => 'Frontend'], function () {

		Route::get('/profile/{id}', 'ProfileController@show')->middleware('auth');
		Route::resource('/beachcourts', 'BeachcourtController');

});


Route::group(['namespace' => 'Admin', 'middleware' => 'App\Http\Middleware\IsAdmin'], function () {

		Route::get('admin/dashboard/', function () {
				return view('admin.dashboard');
		});

		Route::resource('/admin/users', 'UserController');
		Route::resource('/admin/beachcourts', 'BeachcourtController');

});