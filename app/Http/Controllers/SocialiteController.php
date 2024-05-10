<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;


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
                $email = $user['email'];
                $platformId = $user['id'];
                $username = $user['name'];
                $platform = 'google';
                $image = $user['picture'];

                
                $response = $this->loginSocialiteUser($platform , $platformId , $email , $username , $image );
                
                if(!$response['status'])
                {
                    toastr()->error($response['error']);
                    return redirect()->route('login');
                }else{
                    toastr()->success($response['msg']);
                    return redirect()->route('getProfilePage');
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


    public function loginSocialiteUser($platform , $platformId , $email , $username , $image = null )
    {
        $existingUser = User::where('email' , $email)->first();
        
        if($existingUser){
            if($existingUser->platform != $platform){
                return ['status' => false , 'error' => 'You have already been login with different platform'];
            }

            auth()->login($existingUser , TRUE);

            return ['status' => true , 'msg' => 'login successfully' ];
        }else{
          $user = new User;
          $user->platform_id = $platformId;
          $user->platform = $platform;
          $user->password = Crypt::encryptString($platformId);
          $user->name = $username;
          $user->image = $image;
          $user->email = $email;
          $user->save();
          
          auth()->login($user , TRUE);

          return ['status' => true , 'msg' => 'login successfully' ];
        }





    }
}
