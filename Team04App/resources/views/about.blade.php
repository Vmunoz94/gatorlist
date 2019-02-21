{{-- use the aboutLayout template --}}
@extends('layouts.about')

{{-- fill in missing sections --}}
@section('title', 'About')
@section('jumbotronTitle', 'ABOUT THE TEAM')
@section('jumbotronContent')

    <p class="lead text-center jumbotron-content-bigger mb-1">Software Engineering class SFSU</p>
    <p class="lead text-center jumbotron-content-bigger mb-1">Spring 2019</p>
    <p class="lead text-center jumbotron-content-bigger mb-1">Section-01</p>
    <p class="lead text-center jumbotron-content-bigger mb-1">Team-04</p>

@endSection
@section('body')
    <section class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">Team Lead</h5>
            <div class="card-body text-center">
              <a href="about/karuna" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Karuna Nagesh Nayak</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">Frontend</h5>
            <div class="card-body text-center">

              <a href="about/huawei" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Huawei Gao</a>
              <a href="about/dylan" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Dylan Shwan</a>
              <a href="about/victor" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Victor
                Muñoz</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">Backend</h5>
            <div class="card-body text-center">
              <a href="about/gabriel" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Gabriel Alfaro</a>
              <a href="about/daniel" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Daniel Mossaband</a>
              <a href="about/aditya" class="ui inverted purple button small w-75 mx-auto name-of-person my-2">Aditya Sheoran</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
