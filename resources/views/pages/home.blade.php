@extends('layouts.content')

@section ('title', 'Home')

@section('content')

<div class="hero-section">
    <div class="container">
        <h1>{{$homepage -> main_header}}</h1>
        <p>{{$homepage -> about_info}}</p>
        <a href="">{{$homepage -> cta_text}}</a>
    </div>
</div>

<div class="recent-works-section">
    <div class="container">
        <div class="recent-header">
            <h1>Recent Works</h1> 
            <div class="diagonal"></div>
            <a href="">view all</a>
        </div>
    </div>
    <div class="container">
        @foreach($recentWorks as $recentWork)
            <div class="recent-work">
                <h2>0{{$recentWork-> id}}</h2>

                <h3>{{$recentWork-> name}}</h3>
                <p>{{$recentWork-> description}}</p>
                <p>{{$recentWork-> tech_stack}}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection