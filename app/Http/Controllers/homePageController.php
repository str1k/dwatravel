<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\programs;
use App\contact_bar;

class homePageController extends Controller
{
    public function show(){
    $countries = country::all();
    $programs = programs::orderBy('id', 'DESC')->whereDate('show_until', '>=', \Carbon\Carbon::now())->take(20)->get();
    $contact_bar = contact_bar::where('id','=','1')->get()->first();
    return view('pages.home',array('countries'=>$countries,'programs'=>$programs,'contact_bar'=>$contact_bar));
    }
}
