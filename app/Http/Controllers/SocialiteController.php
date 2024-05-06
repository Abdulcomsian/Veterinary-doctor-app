<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
            dd($user);
        }catch(\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
