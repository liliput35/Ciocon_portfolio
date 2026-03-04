@extends('layouts.content')

@section ('title', 'Skills')

@section('content')

<div class="skills-about-section">
    <div class="container">
        <h1 class="">{{$about-> about_header}}</h1> 
        <img src="{{asset('images/' . $about->about_img_addr)}}" alt="">

        <p class="fs-3">{!!$about-> about_text!!}</p>
    </div>
</div>

<div class="main-skills-section">
    <div class="container">
        @foreach($skills as $skill)
            <div class="skill-group mb-4">
                <h3>{{$skill-> skill_name}}</h3>
                <p>{{$skill-> skill_desc}}</p>
            </div>
        @endforeach
    </div>
</div>

<div class="tech-stack-section">
    <div class="container">

        <div class="tech-row">
            <h3>Tech Stack</h3>

            <h5>Frontend</h5>
            <ul class="d-flex">
                @foreach($frontendTech as $frontendTech)
                    <li class="me-3">{{$frontendTech-> tech}}</li>
                @endforeach
            </ul>

            <h5>Backend</h5>
            <ul class="d-flex">
                @foreach($backendTech as $backendTech)
                    <li class="me-3">{{$backendTech-> tech}}</li>
                @endforeach
            </ul>
        </div>
        
        
    </div>
</div>

@endsection