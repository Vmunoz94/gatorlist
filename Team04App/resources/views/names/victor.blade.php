{{-- use the aboutNamesLayout --}}
@extends('layouts.aboutNamesLayout')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Victor')
@section('jumbotronTitle', 'VICTOR MUNOZ')
@section('job', 'Frontend Lead')
@section('imgSource', 'https://scontent-lax3-2.xx.fbcdn.net/v/t1.0-9/12295243_1254024721290521_241534532614562104_n.jpg?_nc_cat=107&_nc_ht=scontent-lax3-2.xx&oh=cfa90ca5cbb3c61a6ddab2a43e0554b1&oe=5CDEFD9E')
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