<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;

class homePageController extends Controller
{
    public function show(){
    $countries = country::all();
    return view('pages.home',array('countries'=>$countries));
    }
}
