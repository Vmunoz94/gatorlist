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

$queryResult = DB::table('users')->where('userName', $userName)->get();
$passwordResult = $queryResult["password"];
// if(password_verify($password, $passwordResult)){
//     return $passwordResult;//hashed password
//     return $userName;//username from input to login

// }else{
//     return null;
// }
    $userExistsCheck = DB::table('users')
    ->select('password')
    ->where([
        ['userName', '=', $userName]
    ])
    ->get();
if (password_verify($password, $userExistsCheck[0]->password)){
    return $userExistsCheck[0]->password;
    return $userName;
}  
else {
    return null;
    }
}
}
