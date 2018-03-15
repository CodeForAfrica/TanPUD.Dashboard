<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Member;

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

            $total_members = Member::count();

            $data = array(
                'page' => 'Dashboard',
                'total_members' => $total_members
            );
            return view('admin.dashboard',compact('user','data'));
        }
    }
}
