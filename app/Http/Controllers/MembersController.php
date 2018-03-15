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

            // Fetching members from ODK Aggegate.
            $host = env('ODK_HOSTNAME','');
            $user = env('ODK_USER','');
            $pass = env('ODK_PASSWORD','');
            $db = env('ODK_DATABASE','');

            $link = mysqli_connect($host, $user, $pass, $db);

            if(!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
 
            $data = array(
                'page' => 'Members'
            );
            return view('admin.members.main',compact('user','data'));
        }
    }
}