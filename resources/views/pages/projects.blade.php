@extends('layouts.content')

@section ('title', 'Projects')

@section('content')


<div class="projects-section">
    <div class="container">
        <h2 class="">My Projects</h2> 
        <p class="sub-header">Some of my recent projects mostly from school</p>
        <a href="{{ route('projects.create') }}" class="add-proj-btn">
            Add New Project
        </a>

        <div class="projects-container">
            @foreach($projects as $project)
                <div class="project-group">
                    <h5 class="fw-bold fs-3">{{$project-> project_name}}</h5> 
                    <p class="mb-3">{{$project-> project_desc}}</p> 
                    <a href="{{ route('projects.edit', $project->id) }}">
                        Edit
                    </a>

                    <div class="mb-5 mt-3">
                        @foreach(explode(',', $project->project_tech_stack) as $tech)
                            <span class="tech-badge">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>

                    <img src="{{ asset('images/' . $project->project_img_addr) }}" alt="Project Image">
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection