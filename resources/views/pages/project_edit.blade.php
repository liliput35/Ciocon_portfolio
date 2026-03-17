@extends('layouts.content')

@section ('title', 'Edit Project')

@section('content')

<div class="container">
    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="post">
        @csrf 
        @method('PUT')

        <div class="mb-3">
            <label>Project Name</label>
            <input type="text" class="form-control" name="project_name"
                   value="{{ $project->project_name }}">
        </div>

        <div class="mb-3">
            <label>Project Description</label>
            <input type="text" class="form-control" name="project_desc"
                   value="{{ $project->project_desc }}">
        </div>

        <div class="mb-3">
            <label>Project Tech Stack</label>
            <input type="text" class="form-control" name="project_tech_stack"
                   value="{{ $project->project_tech_stack }}">
        </div>

        <div class="mb-3">
            <label>Project Link</label>
            <input type="text" class="form-control" name="project_link"
                   value="{{ $project->project_link }}">
        </div>

        <div class="mb-3">
            <label>Project Image Address</label>
            <input type="text" class="form-control" name="project_img_addr"
                   value="{{ $project->project_img_addr }}">
        </div>

        <button class="btn btn-primary">Update Project</button>
    </form>
</div>

@endsection