<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dashboardController extends Controller
{
    //
    public function showPage()
    {
        return view('dashboard');
    }
}
