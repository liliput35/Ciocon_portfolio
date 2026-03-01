<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Profile;

class ProjectController extends Controller
{
    public function index()
    {
    $projects = Project::all();
    $profile = Profile::first();
    return view('pages.projects', compact('projects', 'profile'));
    }
}
