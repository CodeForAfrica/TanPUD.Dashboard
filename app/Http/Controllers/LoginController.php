<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        // Checking for session.
        if(Auth::check())
        {
            return redirect('dashboard');
        }
        else{
            return view('admin.login');
        }
    }
}
