<?php

namespace App\Http\Controllers\Handlers;
use App\Models\{AvailabilitySchedule , WeeklySchedule , Appointment};
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
    
}