@extends('layouts.content')

@section ('title', 'Experience')

@section('content')


<div class="experience-section ">
    <div class="container">
        <h2>Experience</h2>
        <p class="sub-header">My journey as an aspiring software engineer</p>
        <ul>
            @foreach($experiences as $experience)
                <li class="experience-group">
                    <p>{{$experience-> duration}}</p>
                    <h4>{!!$experience-> experience!!}</h4>
                    <p>{{$experience-> desc}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection