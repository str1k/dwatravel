<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;
use App\country;
use App\locate;

class displayTourController extends Controller
{
    public function filter(Request $request){
    $countries = country::all();
    $country = $request->input('country');
    $locate_query = $request->input('locate_query');
    $now_str = \Carbon\Carbon::now()->format('d-m-Y');
    $clauses = [['id','>=','1']];
    $locate_clause =[];
    $locates = [];
    if (!empty($country)) {
    $in =['country','=',$country];
    array_push($locate_clause, $in);
    array_push($clauses, $in);
    $locates = locate::where($locate_clause)->get();
    }
    if (!empty($locate_query)) {
      $in =['locate_list','LIKE','%'.$locate_query.'%'];
      array_push($clauses, $in);
      $in2 = ['locate','=',$locate_query];
      array_push($locate_clause, $in2);
      $locates = locate::where($locate_clause)->get(); 
    }
   $programs = programs::where($clauses)->whereDate('show_until', '>=', \Carbon\Carbon::now())->get();
   
   //print_r($clauses);
   //echo $schedules;
   return view('pages.tours',array('locates'=>$locates,'countries'=>$countries,'programs'=>$programs));

   }
}
