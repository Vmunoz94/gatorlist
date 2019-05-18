<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUserController extends Controller
{


    // public function index(Request $request)
    // {

    // }

public function store(Request $request){
    $userName = $request->input('userName');
    $password = $request->input('password');

    //Receive hashed password from database
$queryResult = DB::table('users')->where('userName', $userName)->get();
$passwordResult = $queryResult["password"];
if(bycrypt($password, $passwordResult)){
    
    return "Success";
}else{
    return "Fucked up password";
}
}
}
