<?php

namespace App\Http\Controllers\Handlers;
use App\Models\{AvailabilitySchedule , WeeklySchedule , Appointment};
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ScheduleHandler{

    public function createAvailabilitySchedule($request)
    {
        $schedules = json_decode($request->schedule , TRUE);

        foreach($schedules as $schedule)
        {
            $date = $schedule['date']['date'];
            $times = $schedule['date']['times'];
            $schedule = [];

            foreach($times as $time)
            {
                $schedule[] = ['date' => $date , 'time' => $time , 'is_available' => 1 ];
            }


            AvailabilitySchedule::insert($schedule);
        }

        return ['status' => true , 'msg' => 'Schedule created successfully'];
    }

    public function updateAvailabilitySchedule($request)
    {
        $schedules = json_decode($request->schedule , TRUE);


        
        foreach($schedules as $schedule)
        {
            $date = $schedule['date']['date'];
            $times = $schedule['date']['times'];
            $isUnavailable = $schedule['date']['is_unavilable']; 

            $appointments = Appointment::with('schedule')
                                        ->whereHas('schedule' , function($query) use ($date){
                                            $query->whereRaw("Date(date) = $date");
                                        })->get();

            //checked wheather any appointment has been booked on date
            if($isUnavailable && $appointments->count())
            {
                $date = Carbon::createFromFormat($date)->format('d F Y');
                return ['status' => false , 'msg' => "Cannot delete, appointment booked on date: $date"];
            }

            //if there is no appointment, then delete availability schedule at then date  
            if($isUnavailable && $appointments->count() == 0)
            {
                AvailabilitySchedule::where('date' , $date)->delete();
                continue;
            }

            //check wheather the old schedule has any appointment and it is removed from;
            $daySchedules = AvailabilitySchedule::with('appointment')->where('date' , $date)->get();
            foreach($daySchedules as $ds)
            { 
                $isFound = false;
                foreach($times as $time)
                {   
                    $newTime = Carbon::parse($time);
                    $previousTime = Carbon::parse($ds->time);
                    if($newTime->eq($previousTime))
                    {
                        $isFound = true;
                    }
                }

                if(!$isFound)
                {
                    if($ds->appointment){
                        return response()->json(['status' => false , 'msg' => "Cannot delete, appointment booked on date: $date"]);
                    }else{
                        AvailabilitySchedule::where('id' , $ds->id)->delete();
                    }
                }

            }

            //check if the time is not in previous date then add it
            foreach($times as $time)
            {
                $newTime = Carbon::parse($time);

                $schedule = $daySchedules->first(function($ds) use ($newTime){
                    return $newTime->eq(Carbon::parse($ds->time));
                });

                if(!$schedule){
                    AvailabilitySchedule::create(['time' => $time , 'date' => $date , 'is_available' => 1]);
                }
            }
            
        }
    }

    public function createWeeklySchedule($request)
    {
        $schedules = json_decode($request->schedule , TRUE);
        foreach($schedules as $schedule)
        {
            $date = $schedule['day']['day'];
            $times = $schedule['day']['times'];
            $isAvailable = $schedule['day']['is_available'];
            $schedule = [];
            if(count($times) > 0)
            {
                foreach($times as $time)
                {
                    $schedule[] = ['date' => $date , 'time' => $time , 'is_available' => $isAvailable];
                }
            }else{
                $schedule[] = ['date' => $date , 'time' => null , 'is_available' => 0];
            }


            WeeklySchedule::insert($schedule);
        }

        return ['status' => true , 'msg' => 'Weekly schedule created successfully'];
    }

    public function updateWeeklySchedule($request)
    {
        $day = $request->day;
        $times = $request->times;
        $isAvailable = $request->is_available;
        $schedule =[];
        if(count($times) > 0)
        {
            foreach($times as $time)
            {
                $schedule[] = ['day' => $day , 'time' => $time , 'is_available' => $isAvailable];
            }

        }else{
            $schedule[] = ['day' => $day , 'time' => null , 'is_available' => $isAvailable];
        }

        WeeklySchedule::insert($schedule);
        return ['status' => true , 'msg' => 'Daily schedule updated successfully'];
    }
    

    public function getWeeklyAppointmentCount()
    {
        $weeklySchedule = DB::table('weekly_schedules')
                                ->selectRaw('
                                    CASE day
                                        WHEN 1 THEN "Monday"
                                        WHEN 2 THEN "Tuesday"
                                        WHEN 3 THEN "Wednesday"
                                        WHEN 4 THEN "Thursday"
                                        WHEN 5 THEN "Friday"
                                        WHEN 6 THEN "Saturday"
                                        WHEN 7 THEN "Sunday"
                                    END AS weekday, COUNT(*) AS totalAppointments')
                                ->where('is_available' , 1)
                                ->groupBy('day')
                                ->get();
                                    
        return $weeklySchedule;
    }

    public function getAvailabilityScheduleCount()
    {
        $today = Carbon::now()->format('Y-m-d');
        $futureDate = Carbon::now()->addDays(6)->format('Y-m-d');
        
   
        $availabilitySchedule = DB::table('availability_schedules')
                                    ->selectRaw('SUM(CASE WHEN is_available = 1 THEN 1 ELSE 0 END) as totalAppointments, date')
                                    ->whereRaw('Date(date) >= ? and Date(date) <= ?', [$today, $futureDate])
                                    ->whereNotExists(function($query){
                                        $query->select(DB::raw(1))
                                        ->from('appointments')
                                        ->whereRaw('appointments.availability_schedule_id = availability_schedules.id');
                                    })
                                    ->groupBy('date')
                                    ->get();
        
        return $availabilitySchedule;
    }

    public function getTodaySchedule()
    {
        $today = Carbon::now()->format('Y-m-d');
        $todaySchedule = AvailabilitySchedule::where('date' , Date($today))->orderBy('time' , 'asc')->get();
        return $todaySchedule;
    }

    public function getTodayWeeklySchedule()
    {
        $today = Carbon::now()->dayOfWeek;
        $todayWeeklySchedule = AvailabilitySchedule::where('day' , $today)->orderBy('time' , 'desc')->get();
        return $todayWeeklySchedule;
    }

}