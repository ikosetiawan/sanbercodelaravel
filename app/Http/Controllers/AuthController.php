<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function proses(Request $request)
    {
        $fistmane = $request->input('fistname');
        $lastname = $request->input('lastname');
        return view('welcome', ['fistname' => $fistmane, 'lastname' => $lastname]);
    }
}
