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
use App\locate;

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
Route::get('/detail','TourDescriptionController@filter');
Route::post('/detail','TourDescriptionController@book');

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


//Country routing
Route::get('/admin_country','countryController@insertform');
Route::post('/upload_image','countryController@uploadPicture');
Route::get('/countries/{country_id?}',function($country_id){
    $country = country::find($country_id);

    return Response::json($country);
});
Route::delete('/countries/{country_id?}',function($country_id){
   $country = country::destroy($country_id);
    return Response::json($country);
});
Route::post('/countries',function(Request $request){
    $country = country::create([
            'country' => $request->input('country'),
            'region' => $request->input('region'),
            'pic_url' => $request->input('pic_url'),
            ]);
    return Response::json($country);
})
;
Route::put('/countries/{country_id?}',function(Request $request,$country_id){
    $country = country::find($country_id);

    $country->country = $request->country;
    $country->region = $request->region;
    $country->pic_url = $request->pic_url;

    $country->save();

    return Response::json($country);
});

//locate routing
Route::get('/admin_locate','locateController@insertform');
Route::get('/locates/{locate_id?}',function($locate_id){
    $locate = locate::find($locate_id);
    return Response::json($locate);
});
Route::post('/locates',function(Request $request){
    $locate = locate::create([
            'country' => $request->input('country'),
            'locate' => $request->input('locate'),
            'pic_url' => $request->input('pic_url'),
            ]);
    return Response::json($locate);
})
;
Route::put('/locates/{locate_id?}',function(Request $request,$locate_id){
    $locate = locate::find($locate_id);

    $locate->locate = $request->locate;
    $country->country = $request->country;
    $country->pic_url = $request->pic_url;

    $locate->save();

    return Response::json($locate);
});