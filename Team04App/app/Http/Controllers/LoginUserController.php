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
    //


    //$queryResult = DB::table('users')->select('userName')->get();
    //$queryResult = DB::table('users')->select('select * from users where userName','=',$userName);
   // return $queryResult;
//    $passwordResult = DB::table('users')->where('userName', $userName)->get('password');
//    $passwordResult = $passwordResult->pluck('password')->toArray();
  // return $passwordResult;
//   $passwordResult = DB::table('users')->where('userName', $userName)->select('password')->get();
//   $passwordResult = DB::table('users')->where('userName', $userName)->pluck('password')->toArray();
// $passwordResult = DB::table('users')->where('userName', $userName)->select('password')->get();
// $passwordResult = DB::table('users')->where('userName', $userName)->pluck('password')->toArray();
// return $passwordResult;

// $passwordResult = DB::table('users')->where('userName', $userName)->get(['password'])->toArray();
// return $passwordResult;
// $passwordResult = DB::table('users')->where('userName', $userName)->select('password')->get();
// $passwordResult = DB::table('users')->where('userName', $userName)->pluck('password')->toArray();
//echo $passwordResult;
//$passwordResult = "";
// $passwordResult = DB::table('users')->where('userName', $userName)->get('password');
//  $passwordResult1 = $passwordResult->pluck('password')->toArray();
// $passwordResult = DB::table('users')->select('select * from users where','userName','=',$userName);
// $passwordResult1 = $passwordResult['password'];
// foreach($passwordResult as $x=>$x_value){
//     echo $x;
// }
// return $passwordResult1;
//echo $passwordResult1;
//$passwordResult = DB::table('')
// $passwordResult = DB::table('users')->select('userName')->where('userName','=',$userName);
// return $passwordResult;
// $passwordResult = DB::table('team04db')->select('userName')->where('userName','=',$userName)->get('password');
// return $passwordResult;
// echo $userName;
// echo $password;
    //Receive hashed password from database
//$userResult = DB::table('users')->where('userName', $userName)->get('userName')->toArray();
//$passwordResult = DB::table('users')->where('userName', $userName)->get('password')->toArray();
//$passwordResult = DB::table('users')->where('userName', $userName)->value('password');

//$passwordResult = DB::table('users')->pluck('password');
//echo $passwordResult;
//$passwordResult = $queryResult["password"];
$passwordResult = DB::table('users')->where('userName','=',$userName)->get()->toArray();



if(password_verify($password, $passwordResult)){//password_verify: bool
    return "Success";
    //echo "Success for Password";
}else{
    return "Incorrect Password";
    //echo "Not working";
}

}


}
