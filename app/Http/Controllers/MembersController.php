<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Member;

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
            $members = Member::all();

            $data = array(
                'page' => 'Members',
                'members' => $members
            );
            return view('admin.members.main',compact('user','data'));
        }
    }

    public function view($id=0)
    {
        // Checking for session.
        if(!Auth::check())
        {
            return redirect('login');
        }
        else{
            $user = Auth::user();
            $member = Member::where('id', $id)->first();

            if($member){
                $data = array(
                    'page' => 'Members',
                    'member' => $member
                );
                return view('admin.members.view',compact('user','data'));
            }
            else return redirect('members');
        }
    }
}