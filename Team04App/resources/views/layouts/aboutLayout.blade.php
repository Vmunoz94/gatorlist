<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- import css frameworks --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <title>@yield('title')</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <span class="navbar-brand text-dark">SFSU</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item p-0">
            <a class="nav-link text-dark" href="#">Home</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link text-dark" href="../about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link text-dark" href="#">Login</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link text-dark" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- jumbotron -->
  <section class="jumbotron jumbotron-fluid mb-0">
    <div class="container">
      <h1 class="display-4 text-center">@yield('jumbotronTitle')</h1>
      <hr class="my-4">
        @yield('jumbotronContent')
  </section>

  <!-- body -->
  @yield('body')

  {{-- import js frameworks --}}
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>