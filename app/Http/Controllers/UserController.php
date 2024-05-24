<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\{UserHandler , ScheduleHandler , StripeHandler};
use Carbon\Carbon;

class UserController extends Controller
{
    protected $userHandler;
    protected $scheduleHandler;
    protected $stripeHandler;

    function __construct(UserHandler $userHandler , ScheduleHandler $scheduleHandler , StripeHandler $stripeHandler)
    {
        $this->userHandler = $userHandler;    
        $this->scheduleHandler = $scheduleHandler;
        $this->stripeHandler = $stripeHandler;
    }

    public function getProfilePage()
    {
        $availabilityScheduleCount = $this->scheduleHandler->getAvailabilityScheduleCount();
        $weeklyAppointmentCount = $this->scheduleHandler->getWeeklyAppointmentCount();
        $today = Carbon::now()->format('Y-m-d'); 
        $todaySchedule = $this->scheduleHandler->getTodaySchedule($today);
        $today = Carbon::now()->dayOfWeek;
        $todayWeeklySchedule = $this->scheduleHandler->gettodayWeeklySchedule($today);
        $setupIntent = $this->stripeHandler->createSetupIntent();

        return view('profile')->with([  
                                      'availabilityScheduleCount' => $availabilityScheduleCount, 
                                      'weeklyScheduleCount' => $weeklyAppointmentCount,
                                      'todaySchedule' => $todaySchedule,
                                      'todayWeeklySchedule' => $todayWeeklySchedule,
                                      'clientSecret' => $setupIntent->client_secret, 
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
