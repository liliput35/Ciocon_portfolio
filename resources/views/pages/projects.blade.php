@extends('layouts.content')

@section ('title', 'Projects')

@section('content')


<div class="projects-section">
    <div class="container">
        <h2 class="">My Projects</h2>
        @foreach($projects as $project)
            <a href="{{$project-> project_link}}">
                <div class="project-group">
                    <h5 class="fw-bold fs-3">{{$project-> project_name}}</h5>
                    <p class="mb-5">{{$project-> project_tech_stack}}</p>

                    <img src="{{ asset('images/' . $project->project_img_addr) }}" alt="Project Image">
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection