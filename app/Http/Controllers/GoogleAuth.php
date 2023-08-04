<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Bytebuilder;

class GoogleAuth extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = Bytebuilder::where('bytebuilder_email', $google_user->getEmail())->first();
    
            if (!$user) {
                $new_user = Bytebuilder::create([
                    'bytebuilder_name' => $google_user->getName(),
                    'bytebuilder_email' => $google_user->getEmail(),
                ]); 
                $new_user->google_token = $google_user->token;
                $new_user->save();
                // Make sure $new_user is an instance of the User model
                Auth::login($new_user);
                return redirect()->intended('welcome');
            } else {
                // If the user already exists, update the Google token explicitly
                if (!$user->google_token) {
                    $user->google_token = $google_user->token;
                    $user->save();
                }
                
                // Make sure $user is an instance of the User model
                Auth::login($user);
                return redirect()->intended('welcome');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
    
}
