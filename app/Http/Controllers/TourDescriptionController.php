<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;

class TourDescriptionController extends Controller
{
    public function filter(Request $request){
    $program_id = $request->input('program_id');
    $clauses = [['id','=',$program_id]];
    //if (!empty($country)) {
    //$in =['country','=',$country];
    //array_push($clauses, $in);
    //}
   $programs = programs::where($clauses)->get();
   //print_r($clauses);
   //echo $schedules;
   return view('pages.detail',array('programs'=>$programs));

   }
}
