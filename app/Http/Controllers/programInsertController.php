<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class programInsertController extends Controller
{
   public function insertform(){
      
      $db_tag = DB::table('tag')->pluck('tag');
   return view('pages.admin_new_tour', compact('db_tag'));
      
   }
	
   public function insert(Request $request){
      $name = $request->input('program_name');
      $day = $request->input('day_count');
      $night = $request->input('night_count');
      $content = $request->input('program_content');
      $country = $request->input('country');
      $key = '123423';
      $tagarray = $request->input('tag_list');
      $tag = implode(',', $tagarray);
      DB::insert('insert into program (program_key, program_name, day_count, night_count,long_desc,country,tag_list) values(?,?,?,?,?,?,?)',[$key,$name,$day,$night,$content,$country,$tag]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/admin_new_tour">Click Here</a> to go back.';
      
   } 
}
