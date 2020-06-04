<?php

Route::get('/', 'BookController@index');
Route::get('author/latvian', 'AuthorController@latvian')->name('author.latvian');

Route::resource('author', 'AuthorController');
Route::resource('book', 'BookController');
Route::resource('publisher', 'PublisherController');
Route::resource('genre', 'GenreController');
Route::resource('review', 'ReviewController');
