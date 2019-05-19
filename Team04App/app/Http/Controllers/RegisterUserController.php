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
        $lastName = $request->input('lastName');
        $userName = $request->input('userName');

        $emailAddr = $request->input('emailAddr');
        if(!strpos($emailAddr, '@')){
            return "Email requires @ sign";
        }

        $password = $request->input('password');
        $securePassword = bcrypt($password);

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
