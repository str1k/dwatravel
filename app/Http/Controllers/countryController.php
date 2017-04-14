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


class countryController extends Controller
{
    public function insertform(){
      $countries = country::all();
      return view('pages.admin.country',array('countries'=>$countries));      
   }
   public function getCountryByRegion(Request $request){
   	$region = $request->input('region');
   	$clauses = [['region','=',$region]];
   	$countries = country::where($clauses)->get();
   	return  $countries;
   }
}
