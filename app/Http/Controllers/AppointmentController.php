<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\{AppointmentHandler , ScheduleHandler};
use Carbon\Carbon;

class AppointmentController extends Controller
{
    protected $appointmentHandler;
    protected $scheduleHandler;

    function __construct(AppointmentHandler $appointmentHandler , ScheduleHandler $scheduleHandler)
    {
        $this->appointmentHandler = $appointmentHandler;
        $this->scheduleHandler = $scheduleHandler;
    }

    public function getAppointmentPage()
    {
        return view('appointments');
    }

    public function getAppointment(Request $request)
    {
        try{
            $today = Carbon::parse($request->appointmentDate)->format('Y-m-d'); 
            $todaySchedule = $this->scheduleHandler->getTodaySchedule($today);
            $today = Carbon::now()->dayOfWeek;
            $todayWeeklySchedule = $this->scheduleHandler->gettodayWeeklySchedule($today);
            $html = view('ajax.appointments' , ['todaySchedule' => $todaySchedule , 'todayWeeklySchedule' => $todayWeeklySchedule])->render();
            return response()->json(['status' => true , 'html' => $html]);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage() , 'line' => $e->getLine() ]);
        }
    }

    public function addAppointment(Request $request)
    {
        
    }
}
