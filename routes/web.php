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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/admin',function () {
	return view('pages.admin_new_tour');
});
Route::get('/admin_new_tour',function () {
	return view('pages.admin_new_tour');
});

Route::get('/admin_all_tour',function () {
	return view('pages.admin_all_tour');
});
Route::get('/admin_test',function () {
	return view('pages.test');
});
Route::get('insert','mysqlInsertController@insertform');
Route::post('create','mysqlInsertController@insert');

