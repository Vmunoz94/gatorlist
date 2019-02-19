{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Karuna')
@section('jumbotronTitle', 'Karuna Nayak')
@section('job', 'Team Lead')
@section('imgSource', '/images/karuna.jpg')
@section('cardBody')
    <div class="lead">
        Hi.. This is Karuna Nayak. Welcome to my page. I am a computer science graduate student at SFSU. This is my 2nd semester as a grad student. 
    </div>
    <div class="lead">
        This semester I am currently enrolled in:
    </div>
    <ul class="ml-5 border-left">
        <li>Software Engineering</li>
        <li>Data Mining</li>
        <li>Independent Study</li>
    </ul>
@endsection