<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function utama() {
        return view('index');
    }

    public function daftar() {
        return view('page.register');


    }

    public function welcome(Request $request){
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');

        return view ('page.welcome', ["firstName" => $firstName, "lastName" => $lastName]);
    }
}
