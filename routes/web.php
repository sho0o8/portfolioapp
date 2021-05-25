<?php
Route::get('/','IndexController@top_page');
Route::get('/about','IndexController@about');
Route::get('/contact','IndexController@contact');
Route::post('/contact/confirm','IndexController@confirm');
Route::get('/mypage','IndexController@job_main');