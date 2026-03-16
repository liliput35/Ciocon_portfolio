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


    //CREATE FORM
    public function create()
    {
        return view('pages.projects_create');

    }

    //STORE DATA
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required', 
            'project_desc' => 'nullable', 
            'project_tech_stack' => 'required', 
            'project_link' => 'required', 
            'project_img_addr' => 'required'
        ]);

        Project::create($validated) ; 

        return redirect()->route('projects.index')
                         ->with('success', 'Project created successfully!');
            
    }

    //EDIT FORM
    public function edit(Project $project)
    {
        return view('pages.project_edit', compact('projects'));

    }

    //UPDATE DATA
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_name' => 'required', 
            'project_desc' => 'nullable', 
            'project_tech_stack' => 'required', 
            'project_link' => 'required', 
            'project_img_addr' => 'required'
        ]);

        Project::update($validated) ; 

        return redirect()->route('pages.projects')
                         ->with('success', 'Project updated successfully!');
            
    }

}
