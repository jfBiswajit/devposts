<?php

Route::get('/', 'indexController@show');
Route::get('/about', 'aboutController@show');
Route::get('/create_post', 'careatePostController@show');
Route::get('/create_category', 'careateCategory@show');
Route::post('/create_category_success', 'careateCategorySuccess@show');

Route::get('/tester', 'tester@test');
