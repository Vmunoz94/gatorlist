{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Huawei')
@section('jumbotronTitle', 'Huawei Gao')
@section('job', 'Frontend Member')
@section('imgSource', '/images/huaweiAvatar.jpg')
@section('cardBody')
    <div class="lead">
        I'm Huawei, and this is my final semester at SFSU. Some of the elective courses I have
        taken here at SFSU are:
    </div>
    <ul class="ml-5 border-left">
        <li>Computer Organization</li>
        <li>Introduction to Databases</li>
        <li>Interactive Multimedia Application</li>
    </ul>
    <div class="lead">
        This semester I am currently enrolled in three clases, which are:
    </div>
    <ul class="ml-5 border-left">
        <li>International Business 330</li>
        <li>CSC648</li>
        <li>CSC675 Intelligence</li>
    </ul>
@endsection