<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::latest()->get(); 
        return view('project', [
            "title" => "Project | Brilliahib",
            "projects" => $project 
        ]);
    }
}
