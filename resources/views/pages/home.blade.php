@extends('layouts.content')

@section ('title', 'Home')

@section('content')

<div class="hero-section">
    <div class="container">
        <h1 class="fw-bold">{{$homepage -> main_header}}</h1>
        <p class="w-75 w-md-50 mb-4">{{$homepage -> about_info}}</p>
        <a href="">{{$homepage -> cta_text}}</a>
    </div>
</div>

<div class="recent-works-section">
    <div class="container">
        <div class="recent-header d-flex align-items-center">
            <h1 class="me-3 fw-bold">Recent Works</h1> 
            <div class="diagonal"></div>
            <a href="" class="fw-light text-decoration-underline">view all</a>
        </div>
    </div>
    <div class="container">
        @foreach($recentWorks as $recentWork)
            <div class="recent-work">
                <h2>0{{$recentWork-> id}}</h2>

                <h3>{{$recentWork-> name}}</h3>
                <p>{{$recentWork-> description}}</p>
                <p class="proj-ts">{{$recentWork-> tech_stack}}</p>
                <img src="{{asset('images/' . $recentWork->img_addr)}}" alt="">
            </div>
        @endforeach
    </div>
</div>

@endsection