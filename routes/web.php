<?php

Route::get('/', 'indexController@show');
Route::get('/about', 'aboutController@show');
Route::get('/post_details', 'postDetailsController@show');
Route::get('/create_category', 'careateCategory@show');
Route::get('/create_post', 'careatePostController@show');
Route::post('/post_successfully_added', 'careatePostController@newpostadded');
Route::get('/show_all_category', 'careateCategory@showCategory');
Route::post('/create_category_success', 'careateCategorySuccess@show');

Route::get('/tester', 'tester@test');
