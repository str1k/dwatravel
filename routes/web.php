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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\country;
use App\Task;
use App\programs;

Route::get('/', 'homePageController@show');

Route::get('/admin','adminAllTourController@index');
Route::get('/admin_new_tour','programInsertController@insertform');
Route::post('/admin_new_tour','programInsertController@index');

Route::get('/admin_add_schedule','scheduleInsertController@insertform');
Route::post('/admin_add_schedule','scheduleInsertController@index');

Route::get('/admin_all_schedule',function () {
	return view('pages.admin_all_schedule');
});



Route::get('/program','displayTourController@filter');
Route::get('/detail','tourDescriptionController@filter');
Route::post('/detail','tourDescriptionController@book');

Route::get('/about-us','aboutUsController@show');
Route::get('/admin_about-us','aboutUsController@form');
Route::post('/admin_about-us','aboutUsController@updateForm');

Route::get('/admin_country_region', 'countryController@getCountryByRegion');


//testing region

Route::get('/tasks/{task_id?}',function($task_id){
    $task = Task::find($task_id);

    return Response::json($task);
});

Route::post('/tasks',function(Request $request){
    $task = Task::create([
            'task' => $request->input('task'),
            'description' => $request->input('description'),
            'done' => false,
            ]);
    return Response::json($task);
})
;
Route::put('/tasks/{task_id?}',function(Request $request,$task_id){
    $task = Task::find($task_id);

    $task->task = $request->task;
    $task->description = $request->description;

    $task->save();

    return Response::json($task);
});

Route::delete('/tasks/{task_id?}',function($task_id){
    $task = Task::destroy($task_id);

    return Response::json($task);
});

Route::get('/testing', function () {
    $tasks = Task::all();

    return View::make('test_mul')->with('tasks',$tasks);
});



Route::get('/admin_all_tour','adminAllTourController@index');

Route::get('/programs/{program_id?}',function($program_id){
    $program = programs::find($program_id);

    return Response::json($program);
});
Route::delete('/programs/{program_id?}',function($program_id){
   $program = programs::destroy($program_id);
    return Response::json($program);
});



Route::get('/admin_country','countryController@insertform');
Route::get('/countries/{country_id?}',function($country_id){
    $country = country::find($country_id);

    return Response::json($country);
});