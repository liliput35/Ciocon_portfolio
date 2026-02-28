@extends('layouts.content')

@section ('title', 'Home')

@section('content')

<div class="container">
    <h1>{{$profile->name}}</h1>
    <h1>Age: {{$profile-> age}}</h1>
</div>
@endsection