<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
use App\country;
use App\locate;
use App\cover;

class coverController extends Controller
{
    public function insertform(){
      $countries = country::all();
      $locates = locate::all();
      $covers = cover::all();
      return view('pages.admin.cover',array('countries'=>$countries,'locates'=>$locates,'covers'=>$covers));      
   }
}
