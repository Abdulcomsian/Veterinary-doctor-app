<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function googleCallback()
    {
        try{
            $userDetail = Socialite::driver('google')->user();
            if($userDetail){
                $user = $userDetail->user;
                $existingUser = User::where('email' , $user['email'])->first();
                if(!$existingUser){
                    $newUser = User::create(['platform' => 'google' , 'platform_id' => $user['id'] , 'email' => $user['email']]);
                    auth()->login($newUser , true);
                }else{
                    if($existingUser->platform != 'google')
                    {
                        return redirect()->route('login')->with(['error' => 'You have previously login with different platform']);
                    
                    }else{
                        auth()->login($existingUser , true);
                    }
                }
            }


        }catch(\Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function facebookCallback()
    {
        try{
            $user = Socialite::driver('facebook')->user();
            dd($user);
        }catch(\Exception $e)
        {
            dd($e->getMessage());
        }
    }


    public function addSocialiteUser($userDetail , $platform)
    {

    }
}
