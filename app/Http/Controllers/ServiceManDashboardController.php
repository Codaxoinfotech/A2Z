<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceManDashboardController extends Controller
{
    public function index(){
        return view('ServiceManDashboard.index');
    }

    public function profile(){
        return view('ServiceManDashboard.profile');
    }

    public function logout(){
        return "logout";
    }

    public function serviceDetails(){
        return view('ServiceManDashboard.serviceDetails');
    }
}
