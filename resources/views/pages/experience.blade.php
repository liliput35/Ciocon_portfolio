@extends('layouts.content')

@section ('title', 'Experience')

@section('content')


<div class="experience-section vh-100">
    <div class="container">
        <h2>Experience</h2>

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