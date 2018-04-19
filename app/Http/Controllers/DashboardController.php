<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Routing\Middleware\CheckLogin;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
