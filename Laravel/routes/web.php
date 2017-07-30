<?php

Auth::routes();


// {{ URL::route('login') }}
// {{ URL::route('beachcourts.show', array('city'=>$beachcourt->citySlug,'latitude'=>$beachcourt->latitude,'longitude'=>$beachcourt->longitude,)) }}
// {{ URL::route('profil.show', Auth::user()->name) }}


Route::group(['namespace' => 'Frontend'], function () {

		Route::get('/beachvolleyballfelder-uebersicht', 'BeachcourtController@index')->name('beachcourts.index');
		Route::get('/beachvolleyballfelder-in-{stateSlug}', 'BeachcourtController@showstate')->name('beachcourts.showstate');
		Route::get('/beachvolleyballfeld-{citySlug}/@{latitude},{longitude}', 'BeachcourtController@show')->name('beachcourts.show');
		Route::post('/favorite/{beachcourt}', 'BeachcourtController@favoriteBeachcourt');
		Route::post('/unfavorite/{beachcourt}', 'BeachcourtController@unFavoriteBeachcourt');
		Route::post('/rating/neu', 'RatingController@store')->name('rating.new');
		Route::post('/beachvolleyballfeld/einreichen', 'SubmittedbeachcourtController@store')->name('beachcourtsubmit.store');  
		Route::delete('/beachvolleyballfeld/submit/löschen/{id}', 'SubmittedbeachcourtController@destroy')->name('beachcourtsubmit.destroy');   

		//Profil
		Route::get('/profil/profilbild-loeschen', 'ProfileController@destroy')->middleware('auth')->name('profile.deleteimage');
		Route::post('/profil', 'ProfileController@update')->middleware('auth')->name('profile.update');
		Route::get('/profil/{name}', 'ProfileController@show')->middleware('auth')->name('profile.show');
		Route::post('/profil/uploadprofilepicture', 'ProfileController@storeimage')->middleware('auth')->name('profile.uploadprofilepicture');

		//Suche
		Route::post('/search', 'SearchController@show')->name('search.show');
	
		//Pages
		Route::resource('/pages', 'PageController', ['parameters' => ['pages' => 'slug']]);

		//Startseite
		Route::get('/', 'HomepageController@show')->name('homepage.show');

		//Register Confirmation
		Route::get('register/verify/{confirmationCode}', ['as' => 'confirmation_path', 'uses' => 'ProfileController@confirmRegistration']);

		//Modals
		Route::get("/modal_login", function() {return View::make('_partials.organism.modals.modal-login');});
		Route::get("/modal_submitBeachcourt", function() {return View::make('_partials.organism.modals.modal-submit-beachcourt');});
		Route::get("/modal_editUserProfile", function() {$id = Auth::id(); $profile = App\User::findOrFail($id); return View::make('_partials.organism.modals.modal-edit-user-profile', compact('profile'));});

		Route::get("/modal_removeFavoriteBeachcourt", function() {$id = Auth::id(); $profile = App\User::findOrFail($id); return View::make('_partials.organism.modals.modal-delete-favorite-beachcourt', compact('profile'));});

});

Route::group(['namespace' => 'Admin', 'middleware' => 'App\Http\Middleware\IsAdmin'], function () {

		//Dashboard
		Route::get('/admin/dashboard', 'DashboardController@show')->name('admin.dashboard.show');
		//User
		Route::get('/admin/user/{name}', 'UserController@show')->name('admin.user.show');
		Route::get('/admin/user', 'UserController@index')->name('admin.user.index');
		Route::get('/admin/user/hinzufuegen', 'UserController@create')->name('admin.user.create');
		Route::put('/admin/user/{name}', 'UserController@update')->name('admin.user.update');
		Route::delete('/admin/user/{name}', 'UserController@destroy')->name('admin.user.destroy');
		Route::post('/admin/user/erstellen', 'UserController@store')->name('admin.user.store');
		Route::get('/admin/user/{name}/bearbeiten', 'UserController@edit')->name('admin.user.edit');
		//Beachfelder
		Route::get('/admin/beachcourt/{id}', 'BeachcourtController@show')->name('admin.beachcourt.show');
		Route::get('/admin/beachcourt', 'BeachcourtController@index')->name('admin.beachcourt.index');
		Route::get('/admin/beachcourt/hinzufuegen', 'BeachcourtController@create')->name('admin.beachcourt.create');
		Route::put('/admin/beachcourt/{id}', 'BeachcourtController@update')->name('admin.beachcourt.update');
		Route::delete('/admin/beachcourt/{id}', 'BeachcourtController@destroy')->name('admin.beachcourt.destroy');
		Route::post('/admin/beachcourt/erstellen', 'BeachcourtController@store')->name('admin.beachcourt.store');
		Route::get('/admin/beachcourt/{id}/bearbeiten', 'BeachcourtController@edit')->name('admin.beachcourt.edit');
		
		// Route::resource('/admin/users', 'UserController');
		// Route::resource('/admin/beachcourts', 'BeachcourtController');
		// Route::resource('/admin/pages', 'PageController', ['parameters' => [
		//     'admin/pages' => 'slug'
		// ]]);
		// Route::resource('/admin/footernavigations', 'FooternavigationController');
});

