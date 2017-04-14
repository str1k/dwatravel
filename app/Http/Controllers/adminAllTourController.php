<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\programs;

class adminAllTourController extends Controller
{
     public function index()
    {
        $programs = programs::all();
        return view('pages.admin_all_tour',array('programs'=>$programs));   
    }

    public function create()
    {
    }

    public function store()
    {
       
    }
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($program_id)
    {
        $program = programs::destroy($program_id);

        return \Illuminate\Routing\ResponseFactory::json($program);
    }
}
