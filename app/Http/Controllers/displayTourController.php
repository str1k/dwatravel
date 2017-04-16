<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\programs;
use App\country;
use App\locate;
use App\contact_bar;
use App\cover;

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
    $content_query = [];
    $query_by = 0;
    $covers = [];
    if (!empty($country)) {
      $in =['country','=',$country];
      array_push($locate_clause, $in);
      array_push($clauses, $in);
      $locates = locate::where($locate_clause)->get();
      $content_query = country::where($clauses)->get()->first();
      $query_by = 1;
      $covers = cover::where('page','=',$country)->orderBy('order', 'ASC')->get();
    }
    if (!empty($locate_query)) {
      $in =['locate_list','LIKE','%'.$locate_query.'%'];
      array_push($clauses, $in);
      $in2 = ['locate','=',$locate_query];
      array_push($locate_clause, $in2);
      $locates = locate::where($locate_clause)->get();
      $content_query = $locates->first(); 
      $query_by = 2;
      $covers = cover::where('page','=',$locate_query)->orderBy('order', 'ASC')->get();
    }
   $programs = programs::where($clauses)->whereDate('show_until', '>=', \Carbon\Carbon::now())->get();
   $found_count = programs::where($clauses)->whereDate('show_until', '>=', \Carbon\Carbon::now())->count();
   $contact_bar = contact_bar::where('id','=','1')->get()->first();

   //print_r($clauses);
   //echo $schedules;
   return view('pages.tours',array('locates'=>$locates,'countries'=>$countries,'programs'=>$programs,'contact_bar'=>$contact_bar,'content_query'=>$content_query,'found_count'=>$found_count,'query_by'=>$query_by,'covers'=>$covers));

   }
}
