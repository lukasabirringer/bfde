<?php




Auth::routes();

Route::group(['namespace' => 'Frontend'], function () {
		Route::post('/favorite/{beachcourt}', 'BeachcourtController@favoriteBeachcourt');
		Route::post('/unfavorite/{beachcourt}', 'BeachcourtController@unFavoriteBeachcourt');
		Route::get('my_favorites', 'BeachcourtController@myFavorites')->middleware('auth');
		Route::post('/profile', 'ProfileController@update')->middleware('auth');
		Route::get('/profile/{id}', 'ProfileController@show')->middleware('auth');
		Route::post('/profile/uploadprofilepicture', 'ProfileController@storeimage')->middleware('auth');
		Route::resource('/beachcourts', 'BeachcourtController');
		Route::resource('/pages', 'PageController', ['parameters' => [
		    'pages' => 'slug'
		]]);
		Route::post('/rating/new', 'RatingController@store');
		Route::get('/', 'HomepageController@show');
		Route::post('/search', 'SearchController@show');
});


Route::group(['namespace' => 'Admin', 'middleware' => 'App\Http\Middleware\IsAdmin'], function () {

		Route::get('admin/dashboard/', function () {
				return view('admin.dashboard');
		});

		Route::resource('/admin/users', 'UserController');
		Route::resource('/admin/beachcourts', 'BeachcourtController');
		Route::resource('/admin/pages', 'PageController', ['parameters' => [
		    'admin/pages' => 'slug'
		]]);
		Route::resource('/admin/footernavigations', 'FooternavigationController');
});

