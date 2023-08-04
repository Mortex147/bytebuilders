<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginControllerMail extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $email = $req->bytebuilder_email;
        $password = $req->bytebuilder_password;

        // Use DB::table() to create a query builder for the "bytebuilders" table
        $user = DB::table('bytebuilders')
            ->where('bytebuilder_email', $email) // Use the correct column name here
            ->first();

        if ($user && password_verify($password, $user->bytebuilder_password)) {
            // Authentication passed
            return view('welcome'); // Change '/dashboard' to your desired authenticated route
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }


    }

}