<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginUserController extends Controller
{


    public function index(Request $request)
    {

    }

    public function store(Request $request)
    {

        $userName = $request->input('userName');
        $password = $request->input('password');

        $queryResult = DB::table('users')->where('userName', $userName)->get();

        $userPassword = DB::table('users')
            ->select('password')
            ->where([
                ['userName', '=', $userName]
            ])
            ->get();
        $userPassword = $userPassword[0]->password;

        if (password_verify($password, $userPassword)) {
            return $queryResult;
        } else {
            return null;
        }

    }
}

