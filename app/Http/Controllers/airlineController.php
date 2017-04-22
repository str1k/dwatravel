<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
use App\airline;

class airlineController extends Controller
{
  public function insertform(){
      $airlines = airline::all();
      return view('pages.admin.airline',array('airlines'=>$airlines));      
   }
}
