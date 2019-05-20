<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterUserController extends Controller
{

    public function index(Request $request)
    {

    }

    public function store(Request $request)
    {
        $firstName = $request->input('firstName');
        // if(empty($firstName['firstName'])){
        //     return "first name field is empty";
        // }
        $lastName = $request->input('lastName');
        $userName = $request->input('userName');

        // if(!strpos($emailAddr, '@')){
        //     return "Email requires @ sign";   
        // }
        

        $password = $request->input('password');
        $securePassword = password_hash($password, PASSWORD_DEFAULT);

        if(empty($firstName) || empty($lastName) ||empty($userName) || empty($password)){

            return "One or more field is empty!. Please fill all the Fields!.";
        }

        if(strlen($userName) < 4) {

            return "username should be at least 4 characters";
        }
    
        if(strlen($password) < 8) {

            return "password should be at least 8 characters";
        }
        
        // else if(function_exists($userName)){
        //     return "Username already exist, use a different username.";
        // }
        

        // else if(!strpos($emailAddr, 'unique')){
        //     return "Email Address already exist, use a different Email Address.";
        // }

        $userExistsCheck = DB::table('users')
        ->select('userName')
        ->where('userName', $userName)
        ->get();


        if(count($userExistsCheck)>0) {
            return "user already exists";
        }
        
        $result = DB::table('users')->insert(
            [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'userName' => $userName,
                'password' => $securePassword,
                'accountCreation' => date("Y-m-d H:i:s")
            ]     
        );

        
        
        return "Finished";

    }
}
