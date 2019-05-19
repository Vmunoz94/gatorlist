<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUserController extends Controller
{


    public function index(Request $request)
     {

    }

public function store(Request $request) {

    $userName = $request->input('userName');
    $password = $request->input('password');
    

    //Receive hashed password from database
    $userExistsCheck = DB::table('users')
    ->select('password')
    ->where([
        ['userName', '=', $userName]
    ])
    ->get();





if (password_verify($password, $userExistsCheck[0]->password)){
    
    return "success";
}  
else {
    return "Login Fail!";
}
}
}
