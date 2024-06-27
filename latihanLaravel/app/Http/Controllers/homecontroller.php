<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    public function send(Request $request)
    {
        $namadepan = $request->input('firstName');
        $namabelakang = $request->input('lastName');
        return view('welcome', ['namadepan' => $namadepan, 'namabelakang' => $namabelakang]);
    }
}
