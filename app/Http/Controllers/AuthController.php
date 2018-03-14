<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Session;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        // Checking passed email and password.
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect('dashboard');
        }
        else{
            $message = "Invalid email or password.";
        }

        dd($message);
    }
}
