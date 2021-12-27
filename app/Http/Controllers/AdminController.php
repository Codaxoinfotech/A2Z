<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function logout(){
        \Auth::logout(); // log the user out of our application
        return view('auth.login');
    }
}
