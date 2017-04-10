<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homePageController@show');

Route::get('/admin','programInsertController@insertform');
Route::get('/admin_new_tour','programInsertController@insertform');
Route::post('/admin_new_tour','programInsertController@index');

Route::get('/admin_add_schedule','scheduleInsertController@insertform');
Route::post('/admin_add_schedule','scheduleInsertController@index');

Route::get('/admin_all_schedule',function () {
	return view('pages.admin_all_schedule');
});

Route::get('/admin_all_tour',function () {
	return view('pages.admin_all_tour');
});
Route::get('/admin_test',function () {
	return view('pages.test');
});
Route::get('/sb',function () {
	return view('pages.sb');
});

Route::get('/program','displayTourController@filter');
Route::get('/detail','tourDescriptionController@filter');