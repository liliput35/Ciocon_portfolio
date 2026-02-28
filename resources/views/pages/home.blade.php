@extends('layouts.content')

@section ('title', 'Home')

@section('content')

<div class="container">
    <h1>{{$profile->name}}</h1>
    <h1>Age: {{$profile-> age}}</h1>

    <h1>{{$homepage -> main_header}}</h1>
    <p>{{$homepage -> about_info}}</p>
    <a href="">{{$homepage -> cta_text}}</a>
</div>
@endsection