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
use App\cover;
use App\airline;

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


//program
Route::get('/admin_all_tour','adminAllTourController@index');

Route::get('/programs/{program_id?}',function($program_id){
    $program = programs::find($program_id);

    return Response::json($program);
});
Route::delete('/programs/{program_id?}',function($program_id){
   $program = programs::destroy($program_id);
    return Response::json($program);
});
Route::post('/upload_pdf','countryController@uploadPDF');
Route::post('/programs',function(Request $request){
    $program = programs::create([
            'name' => $request->input('name'),
            'starting_price' => $request->input('starting_price'),
            'day_count' => $request->input('day_count'),
            'night_count' => $request->input('night_count'),
            'content' => $request->input('content'),
            'country' => $request->input('country'),
            'airline_name' => $request->input('airline_name'),
            'airline_pic' => $request->input('airline_pic'),
            'tour_pic' => $request->input('tour_pic'),
            'pdf' => $request->input('pdf'),
            'pdf_mode' => $request->input('pdf_mode'),
            'show_until' => $request->input('show_until'),
            'locate_list' => $request->input('locate_list'),
            'program_start' => $request->input('program_end'),
            'description' => $request->input('description'),
            ]);
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
            'content' => $request->input('content'),
            ]);
    return Response::json($country);
});
Route::put('/countries/{country_id?}',function(Request $request,$country_id){
    $country = country::find($country_id);

    $country->country = $request->country;
    $country->region = $request->region;
    $country->pic_url = $request->pic_url;
    $country->content = $request->content;

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
            'content' => $request->input('content'),
            ]);
    return Response::json($locate);
})
;
Route::put('/locates/{locate_id?}',function(Request $request,$locate_id){
    $locate = locate::find($locate_id);

    $locate->locate = $request->locate;
    $locate->country = $request->country;
    $locate->pic_url = $request->pic_url;
    $locate->content = $request->content;

    $locate->save();

    return Response::json($locate);
});
Route::delete('/locates/{locate_id?}',function($locate_id){
   $locate = locate::destroy($locate_id);
    return Response::json($locate);
});

//Cover routing
Route::get('/admin_cover','coverController@insertform');
Route::post('/covers',function(Request $request){
    $cover = cover::create([
            'page' => $request->input('page'),
            'href_url' => $request->input('href_url'),
            'pic_url' => $request->input('pic_url'),
            'order' => $request->input('order'),
            ]);
    return Response::json($cover);
});
Route::get('/covers/{cover_id?}',function($cover_id){
    $cover = cover::find($cover_id);
    return Response::json($cover);
});
Route::put('/covers/{cover_id?}',function(Request $request,$cover_id){
    $cover = cover::find($cover_id);
    $cover->page = $request->page;
    $cover->href_url = $request->href_url;
    $cover->pic_url = $request->pic_url;
    $cover->order = $request->order;
    $cover->save();
    return Response::json($cover);
});
Route::delete('/covers/{cover_id?}',function($cover_id){
   $cover = cover::destroy($cover_id);
    return Response::json($cover);
});

//airline routing
Route::get('/admin_airline','airlineController@insertform');
Route::post('/airlines',function(Request $request){
    $airline = airline::create([
            'airline_name' => $request->input('airline_name'),
            'pic_url' => $request->input('pic_url'),
            ]);
    return Response::json($airline);
});
Route::get('/airlines/{airline_id?}',function($airline_id){
    $airline = airline::find($airline_id);
    return Response::json($airline);
});
Route::delete('/airlines/{airline_id?}',function($airline_id){
   $airline = airline::destroy($airline_id);
    return Response::json($airline);
});

//booking routing
Route::get('/booking','bookingController@insertform')