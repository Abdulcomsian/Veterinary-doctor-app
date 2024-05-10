<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\UserHandler;

class UserController extends Controller
{
    protected $userHandler;

    function __construct(UserHandler $userHandler)
    {
        $this->userHandler = $userHandler;    
    }

    public function getProfilePage()
    {
        return view('profile');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function addAppointmentReview(Request $request)
    {

    }
}
