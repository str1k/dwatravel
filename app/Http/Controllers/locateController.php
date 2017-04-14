<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
use App\locate;
use App\country;

class locateController extends Controller
{
    public function insertform(){
      $countries = country::all();
      $locates = locate::all();
      return view('pages.admin.locate',array('locates'=>$locates,'countries'=>$countries));      
   }
}
