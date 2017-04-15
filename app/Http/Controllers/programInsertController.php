<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;
use App\tagging;
use App\country;
use App\programs;
use App\locate;

class programInsertController extends Controller
{
   public function insertform(){
      $locates = locate::all();
      $countries = country::all();
      return view('pages.admin_new_tour',array('locates' => $locates,'countries'=>$countries));      
   }

   public function index(Request $request)
    {

      $rules = array('program_name' => 'bail|required',
         'day_count' =>'required',
         'starting_price' => 'required',
         'night_count' =>'required',
         'country' => 'required',
         'airline_image' => 'nullable',
         'tour_image' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
         'pdf_file' => 'nullable|mimes:pdf',
         'program_start' => 'required',
         'program_end' => 'required',
         'show_until' => 'required');
      $data  =  Input::except(array('_token'));
      $messages = [
    'program_name.required' => 'กรุณาใส่ชื่อโปรแกรมทัวร์',
    'tour_image.required' => 'กรุณาใส่รูปโปรแกรมทัวร์',
];
      $validator = Validator::make($data, $rules, $messages);

      if ($validator->fails()){
         return Redirect::back()->withInput(Input::all())->withErrors($validator);
      }
      else {
      // checking file is valid.
         $tour_image = array('tour_image'=> Input::file('tour_image'));
         
         if (Input::file('tour_image')->isValid()) {
         $destinationPath = 'uploads'; // upload path
         $extension = Input::file('tour_image')->getClientOriginalExtension(); // getting image extension
         $actual_name = rand(0,999999);
            $original_name = $actual_name;
            $tour_fileName = 'tour'.$actual_name.".".$extension;
            $i = 1;
            while(file_exists($destinationPath.'/'.'tour'.$actual_name.".".$extension))
            {           
            $actual_name = (string)$original_name.$i;
            $tour_fileName = 'tour'.$actual_name.".".$extension;
            $i++;
            }
         Input::file('tour_image')->move($destinationPath, $tour_fileName); // uploading file to given path
         // sending back with message
         }
         else {
         // sending back with error message.
         Session::flash('error', 'tour image uploaded file is not valid');
         return Redirect::back()->withInput(Input::all());
         }
         if (!empty(Input::file('pdf_file'))){

            if(Input::file('pdf_file')->isValid()){
            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('pdf_file')->getClientOriginalExtension(); // getting image extension
            
            $actual_name = rand(0,999999);
            $original_name = $actual_name;
            $pdf_fileName = $actual_name.".".$extension;
            $i = 1;
            while(file_exists($destinationPath.'/'.$actual_name.".".$extension))
            {           
            $actual_name = (string)$original_name.$i;
            $pdf_fileName = $actual_name.".".$extension;
            $i++;
            }



            Input::file('pdf_file')->move($destinationPath, $pdf_fileName); // uploading file to given path
            // sending back with message
            }
            else {
            // sending back with error message.
            Session::flash('error', 'pdf uploaded file is not valid');
            return Redirect::back()->withInput(Input::all());
            }
         }
         

         $program = new programs;
         $program->name = $request->input('program_name');
         $program->day_count = $request->input('day_count');
         $program->night_count = $request->input('night_count');
         $program->content = $request->input('program_content');
         $program->country = $request->input('country');
         $locatearray = $request->input('locate_list');
         if (count($locatearray) > 0 ){
            $program->locate_list = implode(',', $locatearray);
         }
         $program->tour_pic = $destinationPath.'/'.$tour_fileName;

         if (!empty(Input::file('pdf_file'))){
            $program->pdf = $destinationPath.'/'.$pdf_fileName;
         }
         $pdf_on = true;
         $pdf_mode = $request->input('pdf_mode');
         if ($pdf_mode == "on"){
            $pdf_on = true;
         }
         else{
            $pdf_on = false;
         }
         $program->airline_pic = $request->input('airline_image');
         $program->pdf_mode = $pdf_on;
         $program->show_until = $request->input('show_until');
         $program->program_start = $request->input('program_start');
         $program->starting_price = $request->input('starting_price');
         $program->program_end = $request->input('program_end');
         $program->description = $request->input('description');
         $program->save();


         Session::flash('success', 'เพิ่มโปรแกรมทัวร์เรียบร้อยแล้ว'); 
         return Redirect::to('/admin_new_tour');

      }
      
    }
}
