<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GatorList</title>

        {{-- import css frameworks --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{-- Import Google Maps API Key --}}

    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            {{-- Single App Page --}}
            <gatorlist-navbar></gatorlist-navbar>
            <router-view></router-view>
        </div>
    
    {{-- import js frameworks --}}
    <script src="{{ asset('./js/app.js') }}"></script>
    </body>
</html>
