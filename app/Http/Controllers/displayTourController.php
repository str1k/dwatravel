<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;

class displayTourController extends Controller
{
    public function filter(Request $request){
    $country = $request->input('country');
    $clauses = [['id','>=','1']];
    if (!empty($country)) {
    $in =['country','=',$country];
    array_push($clauses, $in);
    }
   $programs = programs::where($clauses)->get();
   //print_r($clauses);
   //echo $schedules;
   return view('pages.tours',array('programs'=>$programs));

   }
}
