<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //Vista principal
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function admin() {
        return view('admin.dashboard.index');
    }
}
