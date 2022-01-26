<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    // menngunakan wildcard
    // public function __invoke(Request  $request, $indentifier)
    // {

    //     return view('profile', ['username' => $indentifier]);
    // }

    public function index(){

        return view('profile');
    }
}
