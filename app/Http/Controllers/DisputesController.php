<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DisputesController extends Controller
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
                'page' => 'Disputes'
            );
            return view('admin.disputes.main',compact('user','data'));
        }
    }
}