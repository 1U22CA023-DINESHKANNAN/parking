<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    function home(){
        return view('welcome-page');
    }
    function register(){
        return view('register');
    }
}
