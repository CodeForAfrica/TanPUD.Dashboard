<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MembersController extends Controller
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
                 'page' => 'Members'
             );
             return view('admin.members.main',compact('user','data'));
         }
    }
}