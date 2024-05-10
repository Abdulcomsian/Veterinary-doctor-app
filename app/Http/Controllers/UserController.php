<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\{UserHandler , ScheduleHandler};

class UserController extends Controller
{
    protected $userHandler;
    protected $scheduleHandler;

    function __construct(UserHandler $userHandler , ScheduleHandler $scheduleHandler)
    {
        $this->userHandler = $userHandler;    
        $this->scheduleHandler = $scheduleHandler;
    }

    public function getProfilePage()
    {
        $availabilityScheduleCount = $this->scheduleHandler->getAvailabilityScheduleCount();
        $weeklyAppointmentCount = $this->scheduleHandler->getWeeklyAppointmentCount();
        $todaySchedule = $this->scheduleHandler->getTodaySchedule();
        $todayWeeklySchedule = $this->scheduleHandler->gettodayWeeklySchedule();
        return view('profile')->with([  
                                      'availabilityScheduleCount' => $availabilityScheduleCount, 
                                      'weeklyScheduleCount' => $weeklyAppointmentCount,
                                      'todaySchedule' => $todaySchedule,
                                      'todayWeeklySchedule' => $todayWeeklySchedule
                                    ]);
    }

    public function logout()
    {
        if(auth()->check())
        {
            auth()->logout();
        }

        return redirect()->route('login');
    }

    public function addAppointmentReview(Request $request)
    {

    }
}
