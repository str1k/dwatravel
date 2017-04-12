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
use App\programs;
use App\aboutUs;

class aboutUsController extends Controller
{
    public function show(){
    $countries = country::all();
    $aboutUs = aboutUs::all();
    return view('pages.about-us',array('aboutUs'=>$aboutUs,'countries'=>$countries));
    }
    public function form(){
    $aboutUs = aboutUs::all();
    $tmp_aboutUs = new aboutUs;
    return view('pages.admin_about-us',array('aboutUs'=>$aboutUs,'tmp_aboutUs'=>$tmp_aboutUs));
    }
    public function updateForm(Request $request){
    	$rules = array('content'=> 'bail|required','ceo_name'=>'required');
    	$data  =  Input::except(array('_token'));
    	$validator = Validator::make($data, $rules);
		if ($validator->fails()){
        	return Redirect::back()->withInput(Input::all())->withErrors($validator);
      	}
      	else {
      		if (!empty(Input::file('ceo_pic'))){
      			if (Input::file('ceo_pic')->isValid()) {
         		$destinationPath = 'uploads'; // upload path
         		$extension = Input::file('ceo_pic')->getClientOriginalExtension(); // getting image extension
         		$actual_name = rand(0,999999);
            	$original_name = $actual_name;
            	$ceo_fileName = 'ceo_pic'.$actual_name.".".$extension;
            	$i = 1;
            	while(file_exists($destinationPath.'/'.'ceo_pic'.$actual_name.".".$extension))
            	{           
            		$actual_name = (string)$original_name.$i;
            		$ceo_fileName = 'airline'.$actual_name.".".$extension;
            		$i++;
            	}
         		Input::file('ceo_pic')->move($destinationPath, $ceo_fileName); // uploading file to given path
         		// sending back with message
        	 	}
         	else {
         		// sending back with error message.
         		Session::flash('error', 'tour image uploaded file is not valid');
         		return Redirect::back()->withInput(Input::all());
         		}
         	$aboutUs->ceo_pic = $destinationPath.'/'.$ceo_fileName;
         	}
         	$aboutUs = new aboutUs;
         	$aboutUs->content = $request->input('content');
         	$aboutUs->ceo_name =$request->input('ceo_name');
         	
			$aboutUs->exists = true;
			$aboutUs->id = 1; //already exists in database.
			$aboutUs->save();
			Session::flash('success', 'แก้ไข้เรียบร้อยแล้ว');
			return Redirect::to('/admin_about-us');
		}      
    }
}
