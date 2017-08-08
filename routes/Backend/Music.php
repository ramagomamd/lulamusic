<?php

Route::group([
	'prefix' => 'music',
	'as' => 'music.',
	'namespace' => 'Music',
	'middleware' => 'access.routeNeedsRole:1'
], function() {

	Route::resource('settings', 'SettingsController');

	Route::post('albums/upload', 'AlbumsController@upload')->name('albums.upload');
	Route::post('albums/{album}/download', 'AlbumsController@download')->name('albums.download');
	Route::resource('albums', 'AlbumsController');

	Route::get('artists/{artist}/albums', 'ArtistsController@albums')->name('artists.albums');
	Route::get('artists/{artist}/singles', 'ArtistsController@singles')->name('artists.singles');
	Route::get('artists/{artist}/tracks', 'ArtistsController@tracks')->name('artists.tracks');
	Route::resource('artists', 'ArtistsController');

	Route::get('categories/{category}/albums', 'CategoriesController@albums')
		->name('categories.albums');
	Route::get('categories/{category}/singles', 'CategoriesController@singles')
		->name('categories.singles');
	Route::resource('categories', 'CategoriesController');

	Route::get('genres/{genre}/albums', 'GenresController@albums')->name('genres.albums');
	Route::get('genres/{genre}/singles', 'GenresController@singles')->name('genres.singles');
	Route::resource('genres', 'GenresController');

	Route::resource('singles', 'SinglesController', ['except' => 'show']);

	Route::post('tracks/download/{track}', 'TracksController@download')->name('tracks.download');
	Route::resource('tracks', 'TracksController');
});