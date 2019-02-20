{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Aditya')
@section('jumbotronTitle', 'Aditya Sheoran')
@section('job', 'Backend')
@section('imgSource', '/images/adityaPic.jpg')
@section('cardBody')
    <div class="lead">
        I'm Aditya, and this is my final semester at San Francisco State University. Some of the elective courses I have
        taken here at SFSU are:
    </div>
    <ul class="ml-5 border-left">
        <li>Computer Organization</li>
        <li>Programming cafe</li>
        
    </ul>
    <div class="lead">
        This semester I am currently enrolled in five CSC classes, which are:
    </div>
    <ul class="ml-5 border-left">
        <li>Software Engineering</li>
        <li>Introduction to Database Systems</li>
        <li>Analysis of Algorithms</li>
        <li>Programming Languages</li>
        <li>System Administration</li>

    </ul>
@endsection
