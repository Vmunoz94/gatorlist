<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Delete this later
Route::get('/about', function(){
   return view('about');
});


// Delete this later
Route::get('/about/victor', function(){
   return view('names.victor');
});

Route::get('/about/karuna', function(){
   return view('names.karuna');
});