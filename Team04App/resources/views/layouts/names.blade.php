{{-- use the aboutLayout template --}}
@extends('layouts.about')

{{-- fill in the body section --}}
{{-- this was made seperate because the about body is different from the individual site body --}}
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 ">
                    <div class="carousel slide ">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="w-100 m-0 border border-dark rounded"
                                    src="@yield('imgSource')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card text-white bg-dark mb-5 w-100">
                        <h5 class="card-header">@yield('job')</h5>
                        <div class="card-body">
                            @yield('cardBody')
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <a id="go-back-button" href="/about" class="btn btn-light btn-lg ml-3 d-flex justify-content-center mx-auto">
                <i class="fas fa-arrow-left d-flex my-auto pr-3"></i> Go Back
            </a>
        </div>
    </section>
@endsection