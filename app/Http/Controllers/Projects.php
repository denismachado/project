<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projects extends Controller
{
    public function index(){

        $projects = \App\Project::all();

        return view('project');
    }
}
