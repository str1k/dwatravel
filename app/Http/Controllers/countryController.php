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
   public function desc(){
      $countries = country::all();
      return view('pages.admin.country_desc',array('countries'=>$countries));      
   }
   public function getCountryByRegion(Request $request){
   	$region = $request->input('region');
   	$clauses = [['region','=',$region]];
   	$countries = country::where($clauses)->get();
   	return  $countries;
   }
   public function uploadPicture(Request $request){
      if (!empty(Input::file('pic-country'))){

            if(Input::file('pic-country')->isValid()){
            $destinationPath = 'uploads/picture'; // upload path
            $extension = Input::file('pic-country')->getClientOriginalExtension(); // getting image extension
            
            $actual_name = rand(0,999999);
            $original_name = $actual_name;
            $fileName = $actual_name.".".$extension;
            $i = 1;
            while(file_exists($destinationPath.'/'.$actual_name.".".$extension))
            {           
            $actual_name = (string)$original_name.$i;
            $fileName = $actual_name.".".$extension;
            $i++;
            }



            Input::file('pic-country')->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            }
            else {
            // sending back with error message.
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::back()->withInput(Input::all());
            }
         }

         if (!empty(Input::file('pic-country'))){
            return $destinationPath.'/'.$fileName;
         }

   }
   public function uploadPDF(Request $request){
      if (!empty(Input::file('pdf_upload'))){

            if(Input::file('pdf_upload')->isValid()){
            $destinationPath = 'uploads/pdf'; // upload path
            $extension = Input::file('pdf_upload')->getClientOriginalExtension(); // getting image extension
            
            $actual_name = rand(0,999999);
            $original_name = $actual_name;
            $fileName = $actual_name.".".$extension;
            $i = 1;
            while(file_exists($destinationPath.'/'.$actual_name.".".$extension))
            {           
            $actual_name = (string)$original_name.$i;
            $fileName = $actual_name.".".$extension;
            $i++;
            }



            Input::file('pdf_upload')->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            }
            else {
            // sending back with error message.
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::back()->withInput(Input::all());
            }
         }

         if (!empty(Input::file('pdf_upload'))){
            return $destinationPath.'/'.$fileName;
         }

   }
}
