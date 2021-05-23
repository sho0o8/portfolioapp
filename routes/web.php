<?php
Route::get('/','IndexController@top_page');
Route::get('/about','IndexController@about');
Route::get('/contact','ContactController@index');
Route::post('/contact/confirm','ContactController@confirm');