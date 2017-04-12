<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;
use App\country;

class displayTourController extends Controller
{
    public function filter(Request $request){
    $countries = country::all();
    $country = $request->input('country');
    $clauses = [['id','>=','1']];
    if (!empty($country)) {
    $in =['country','=',$country];
    array_push($clauses, $in);
    }
   $programs = programs::where($clauses)->get();
   //print_r($clauses);
   //echo $schedules;
   return view('pages.tours',array('countries'=>$countries,'programs'=>$programs));

   }
}
