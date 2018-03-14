<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Checking for session.
        if(!Auth::check())
        {
            return redirect('login');
        }
        else{
            $user = Auth::user();

            $data = array(
                'page' => 'Dashboard'
            );
            return view('admin.dashboard',compact('user','data'));
        }
    }
}