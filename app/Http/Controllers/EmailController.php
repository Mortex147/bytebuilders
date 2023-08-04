<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\email;
use App\Models\Bytebuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function index(Request $req){
        return view('welcome');
    }
    public function VerifyEmail(string $hash){

        [$createdAt,$id]=explode('///',base64_decode($hash));
        $bytebuilder=Bytebuilder::findOrFail($id);

        if($createdAt !== $bytebuilder -> created_at->ToDateTimeString()){
            abort(403);
        }
        if($bytebuilder ->email_verified_at !== NULL){
            return response('compte déja activé');
        }

        $name=$bytebuilder->bytebuilder_prename;
        $email=$bytebuilder->bytebuilder_email;
        $bytebuilder->fill([
            'email_verified_at'=>Carbon::now()->toDateTimeString()
        ])->save();
        return view('email_verified',compact('name','email'));
    }

}
