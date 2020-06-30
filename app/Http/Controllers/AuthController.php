<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view("form");
    }

    public function welcome(Request $request) {
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view("welcome", ['fname' => $fname, 'lname' => $lname]);
    }
}
