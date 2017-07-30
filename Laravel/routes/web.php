<?php

Auth::routes();

Route::group(['namespace' => 'Frontend'], function () {
		//Beachcourts
		// Route::resource('/beachcourts', 'BeachcourtController');
		Route::get('/beachvolleyballfelder-uebersicht', 'BeachcourtController@index')->name('beachcourts.index');
		Route::get('/beachvolleyballfeld-{city}/@{latitude},{longitude}', 'BeachcourtController@show')->name('beachcourts.show');     
		Route::post('/beachvolleyballfeld', 'BeachcourtController@store')->name('beachcourts.store');   
		Route::get('/beachvolleyballfeld/erstellen', 'BeachcourtController@store')->name('beachcourts.create');   
		Route::post('/beachvolleyballfeld/suche', 'SearchController@show')->name('beachcourts.search');
// 		                    |
// |        | POST      | beachcourts/search                              |                           | App\Http\Controllers\Frontend\SearchController@show                     | web                             |
// |        | PUT|PATCH | beachcourts/{beachcourt}                        | beachcourts.update        | App\Http\Controllers\Frontend\BeachcourtController@update               | web                             |
// |        | DELETE    | beachcourts/{beachcourt}                        | beachcourts.destroy       | App\Http\Controllers\Frontend\BeachcourtController@destroy              | web                             |
// |        | GET|HEAD  | beachcourts/{beachcourt}/edit                   | beachcourts.edit          | App\Http\Controllers\Frontend\BeachcourtController@edit  
		Route::post('/favorite/{beachcourt}', 'BeachcourtController@favoriteBeachcourt');
		Route::post('/unfavorite/{beachcourt}', 'BeachcourtController@unFavoriteBeachcourt');
		Route::post('/rating/new', 'RatingController@store');
		Route::resource('/beachcourtsubmit', 'SubmittedbeachcourtController');

		//Profil
		Route::get('/profil/profilbild-loeschen', 'ProfileController@destroy')->middleware('auth')->name('profile.deleteimage');
		Route::post('/profil', 'ProfileController@update')->middleware('auth')->name('profile.update');
		Route::get('/profil/{name}', 'ProfileController@show')->middleware('auth')->name('profile.show');
		Route::post('/profil/uploadprofilepicture', 'ProfileController@storeimage')->middleware('auth')->name('profile.uploadprofilepicture');

		//Suche
		Route::post('/search', 'SearchController@show');
	
		//Pages
		Route::resource('/pages', 'PageController', ['parameters' => ['pages' => 'slug']]);

		//Startseite
		Route::get('/', 'HomepageController@show');

		//Register Confirmation
		Route::get('register/verify/{confirmationCode}', ['as' => 'confirmation_path', 'uses' => 'ProfileController@confirmRegistration']);

		//Modals
		Route::get("/modal_login", function() {return View::make('_partials.organism.modals.modal-login');});
		Route::get("/modal_submitBeachcourt", function() {return View::make('_partials.organism.modals.modal-submit-beachcourt');});
		Route::get("/modal_editUserProfile", function() {$id = Auth::id(); $profile = App\User::findOrFail($id); return View::make('_partials.organism.modals.modal-edit-user-profile', compact('profile'));});
		Route::get("/modal_removeFavoriteBeachcourt", function() {$id = Auth::id(); $profile = App\User::findOrFail($id); return View::make('_partials.organism.modals.modal-delete-favorite-beachcourt', compact('profile'));});
});

Route::group(['namespace' => 'Admin', 'middleware' => 'App\Http\Middleware\IsAdmin'], function () {

		Route::get('admin/', function () {
				return view('admin.dashboard');
		});
		Route::get('/admin/dashboard', 'DashboardController@show')->name('adminDashboard.show');
		
		Route::resource('/admin/users', 'UserController');
		//Route::resource('/admin/beachcourts', 'BeachcourtController');
		Route::resource('/admin/pages', 'PageController', ['parameters' => [
		    'admin/pages' => 'slug'
		]]);
		Route::resource('/admin/footernavigations', 'FooternavigationController');
});

