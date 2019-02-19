{{-- use the aboutNamesLayout --}}
@extends('layouts.names')

{{-- fill in values that were left empty in the layout --}}
@section('title', 'Victor')
@section('jumbotronTitle', 'Daniel Mossaband')
@section('job', 'Backend Lead')
<!--@section('imgSource', '/images/IMAGEFILE.jpg')-->
@section('cardBody')
<div class="lead">
    Hey! My name is Daniel Mossaband and I've just recently become a resident of San Francisco. I moved to San Francisco
    from Los Angeles in Spring of 2017 to pursue my passion in Computer Science and hope to graduate by Spring of 2019
    from San Francisco State University.
</div>

@endsection
