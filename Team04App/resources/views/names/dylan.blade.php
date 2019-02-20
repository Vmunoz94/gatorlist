{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Dylan')
@section('jumbotronTitle', 'Dylan Shwan')
@section('job', 'Front End')
@section('imgSource', '/images/DylanPic.jpg')
@section('cardBody')
    <div class="lead">
        I'm Dylan, and I am a senior at SFSU. Despite being a novice in Computer Science, my 
        appetite to learn is unsatiable. I enjoy working out, videogames, cosplay, 
        puzzle solving, and more!
    </div>
@endsection