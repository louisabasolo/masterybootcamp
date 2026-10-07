<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return "DASHBOARD" . $request->input('id');
    }

    public function show()
    {
        return view('dashboard');
    }
}
