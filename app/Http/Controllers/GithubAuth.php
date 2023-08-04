<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Bytebuilder;

class GithubAuth extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callbackGithub()
    {
        try {
            $github_user = Socialite::driver('github')->user();
            $user = Bytebuilder::where('bytebuilder_email', $github_user->getEmail())->first();

            if (!$user) {
                $new_user = Bytebuilder::create([  
                    'bytebuilder_name' => $github_user->getName(),
                    'bytebuilder_email' => $github_user->getEmail()
                  
                ]);
                // Set the Google token explicitly for the new user
                $new_user->github_token = $github_user->token;
                $new_user->save();

                // Make sure $new_user is an instance of the User model
                Auth::login($new_user);
                return redirect('welcome');
            } else {
                // Set the Google token explicitly for the new user
                if (!$user->github_token) {
                    $user->github_token = $github_user->token;
                    $user->save();
                }
                // Make sure $user is an instance of the User model
                Auth::login($user);
                return redirect('welcome');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}
