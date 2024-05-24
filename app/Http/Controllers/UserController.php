<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\{UserHandler , ScheduleHandler};
use Carbon\Carbon;
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
        $today = Carbon::now()->format('Y-m-d'); 
        $todaySchedule = $this->scheduleHandler->getTodaySchedule($today);
        $today = Carbon::now()->dayOfWeek;
        $todayWeeklySchedule = $this->scheduleHandler->gettodayWeeklySchedule($today);
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
