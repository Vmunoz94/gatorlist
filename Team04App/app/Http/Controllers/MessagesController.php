<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $from_userID = $request->input('from_userID');
        $to_userID = $request->input('to_userID');
        $message = $request->input('message');

        $result = DB::table('messages')->insert(
            [
                'pending' => 1,
                'from_userID' => $from_userID,
                'to_userID' => $to_userID,
                'message' => $message,
                'date' => date("Y-m-d H:i:s")
            ]
        );
        return "Finished";
    }
}
