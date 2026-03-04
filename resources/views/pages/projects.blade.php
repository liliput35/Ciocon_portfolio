@extends('layouts.content')

@section ('title', 'Projects')

@section('content')


<div class="projects-section">
    <div class="container">
        <h2 class="">My Projects</h2> 
        <p class="sub-header">Some of my recent projects mostly from school</p>
        @foreach($projects as $project)
            <a href="{{$project-> project_link}}">
                <div class="project-group">
                    <h5 class="fw-bold fs-3">{{$project-> project_name}}</h5> 
                    <p class="mb-3">{{$project-> project_desc}}</p>
                    <div class="mb-5">
                        @foreach(explode(',', $project->project_tech_stack) as $tech)
                            <span class="tech-badge">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>

                    <img src="{{ asset('images/' . $project->project_img_addr) }}" alt="Project Image">
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection