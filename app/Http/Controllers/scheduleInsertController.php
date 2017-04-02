<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tagging;
use App\country;
use App\programs;
use App\schedule;

class scheduleInsertController extends Controller
{
public function insertform(){
      
      $tags = tagging::all();
      $countries = country::all();
      $programs = programs::all();
      return view('pages.admin_add_schedule',array('tags' => $tags,'countries'=>$countries,'programs'=>$programs));      
   }
   
 public function index(Request $request){
 	$schedule = new schedule;
 	
 	$program_id = $request->input('program');
 	$program = programs::find($program_id);
 	$schedule->program_id = $program->id;
 	$seat = $request->input('seat');
 	$schedule->seat = $request->input('seat');
 	$schedule->departure =$request->input('departure');
 	$schedule->arrival = $request->input('arrival');
 	$schedule->country = $program->country;
	$discount_option = $request->input('is_discount');
 	$is_discount = true;
 	if ($discount_option == "on"){
 		$is_discount = true;
 	}
 	else{
 		$is_discount = false;
 	}
 	$schedule->is_discount = $is_discount;
 	$schedule->adult_price = $request->input('adult_price');
 	$schedule->adult_discount = $request->input('adult_discount');
 	$schedule->child_price = $request->input('child_price');
 	$schedule->child_discount = $request->input('child_discount');
 	$schedule->infant_price = $request->input('infant_price');
 	$schedule->show_until = $request->input('show_until');
 	$schedule->save();
 	echo "Record inserted successfully.<br/>";
    echo '<a href = "/admin_add_schedule">Click Here</a> to go back.';
 }
 /*
public function index(Request $request)
    {

      $program_id = $request->input('program')
      //$car = Car::find($id);
      $program = new programs;
      $program->name = $request->input('program_name');
      $program->day_count = $request->input('day_count');
      $program->night_count = $request->input('night_count');
      $program->content = $request->input('program_content');
      $program->country = $request->input('country');
      $tagarray = $request->input('tag_list');
      $program->tag_list = implode(',', $tagarray);
      $program->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/admin_new_tour">Click Here</a> to go back.';
    } 
*/
}
