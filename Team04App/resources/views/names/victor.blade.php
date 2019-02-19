{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Victor')
@section('jumbotronTitle', 'Victor Muñoz')
@section('job', 'Frontend Lead')
@section('imgSource', '/images/victorSelfie.jpg')
@section('cardBody')
    <div class="lead">
        I'm Victor, and this is my final semester at SFSU. Some of the elective courses I have
        taken here at SFSU are:
    </div>
    <ul class="ml-5 border-left">
        <li>Computer Networks</li>
        <li>Introduction to Databases</li>
        <li>Search Engines</li>
    </ul>
    <div class="lead">
        This semester I am currently enrolled in three clases, which are:
    </div>
    <ul class="ml-5 border-left">
        <li>Software Engineering</li>
        <li>Internet Applications</li>
        <li>Artificial Intelligence</li>
    </ul>
@endsection