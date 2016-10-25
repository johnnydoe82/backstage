<?php

View::share('baseurl',URL::to('/'));
View::share('active_user', Auth::user());

Route::get('/', 'SongsController@index');
Route::resource('songs','SongsController');

Route::resource('instruments','InstrumentsController');

Auth::routes();
