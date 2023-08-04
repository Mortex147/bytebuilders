<?php

namespace App\Http\Controllers;

use App\Models\Bytebuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeControllerMail extends Controller
{
    public function create()
    {


        return view('create');
    }
    public function store(Request $req)
    {


        $data = $req->validate([
            'bytebuilder_name' => 'required',
            'bytebuilder_prename' => 'required',
            'bytebuilder_email' => 'required|email|unique:bytebuilders',
            'bytebuilder_password' => 'required',
            'bytebuilder_category' => 'required',
            'bytebuilder_city' => 'required',
            'bytebuilder_country' => 'required',
            'bytebuilder_birthdate' => 'required',

        ]);
        $password = $req->bytebuilder_password;
        $data['bytebuilder_password'] = Hash::make($password);
        Bytebuilder::create($data);

        return view('welcome');
    }
}