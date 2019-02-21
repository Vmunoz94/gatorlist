{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Gabe')
@section('jumbotronTitle', 'Gabriel Alfaro')
@section('job', 'Backend')
@section('imgSource', '/images/blankProfile.png')
@section('cardBody')
<div class="lead">
    Hello, my name is Gabriel Alfaro and I am a 5th year currently attending
    SFSU and I plan to graduate this semester Spring 2019. I hope to learn as
    much as possible when it comes to Computer Science.
</div>

@endsection
