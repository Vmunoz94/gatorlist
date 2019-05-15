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

        $emailAddr = $request->input('emailAddr');

        // if(!strpos($emailAddr, '@')){
        //     return "Email requires @ sign";   
        // }
        

        $password = $request->input('password');
        $securePassword = bcrypt($password);

        if(empty($firstName) || empty($lastName) || empty($emailAddr) || empty($userName) || empty($password)){

            return "One or more field is empty!. Please fill all the Fields!.";
        } else if (!strpos($emailAddr, '@')){
            return "Email requires @ sign";
        } 
        // else if($userName>0){
        //     return "Username already exist, use a different username.";
        // }

        $result = DB::table('users')->insert(
            [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'userName' => $userName,
                'emailAddr' => $emailAddr,
                'password' => $securePassword,
                'accountCreation' => date("Y-m-d H:i:s")
            ]

        );
        return "Finished";

    }
}
