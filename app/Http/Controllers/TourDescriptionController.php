<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;
use App\country;

class TourDescriptionController extends Controller
{
    public function filter(Request $request){
    $countries = country::all();
    $program_id = $request->input('program_id');
    $clauses = [['id','=',$program_id]];
    //if (!empty($country)) {
    //$in =['country','=',$country];
    //array_push($clauses, $in);
    //}
   $programs = programs::where($clauses)->get();
   //print_r($clauses);
   //echo $schedules;
   return view('pages.detail',array('countries'=>$countries,'programs'=>$programs));

   }
}
#test
