@extends('layouts.content')

@section ('title', 'Projects')

@section('content')

<div class="container">
    <h1>Create Project</h1>

    <form action="{{ route('projects.store') }}" method="post">
        @csrf 

        <div class="mb-3">
            <label>Project Name</label>
            <input type="text" class="form-control" name="project_name">
        </div>

        <div class="mb-3">
            <label>Project Description</label>
            <input type="text" class="form-control" name="project_desc">
        </div>

        <div class="mb-3">
            <label>Project Tech Stack</label>
            <input type="text" class="form-control" name="project_tech_stack">
        </div>

        <div class="mb-3">
            <label>Project Link</label>
            <input type="text" class="form-control" name="project_link">
        </div>

        <div class="mb-3">
            <label>Project Image Address</label>
            <input type="text" class="form-control" name="project_img_addr">
        </div>

        <button class="btn btn-success">Save Project</button>
    </form>
</div>

@endsection