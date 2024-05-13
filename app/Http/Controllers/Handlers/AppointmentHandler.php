<?php

namespace App\Http\Controllers\Handlers;
use App\Models\Appointment;

class AppointmentHandler{

    public function createAppointment($request)
    {
        $availabilityScheduleId = $request->availablityScheduleId;
        $weeklyScheduleId = $request->weeklyScheduleId;
        $planId = $request->planId;
        $petId = $request->petId;
        
        Appointment::create([
            'pet_id' => $petId,
            'schedule_id' => $availabilityScheduleId,
            'weekly_schedule_id' => $weeklyScheduleId,
            'plan_id' => $planId
        ]);

        return ['status' => true , 'Appointment added successfully'];
    }

    public function cancelledAppointment($request)
    {
        Appointment::where('id' , $request->id)->update(['is_canceled' => 1]);

        return ['status' => true , 'Appointment canceled successfully'];
    }

    
    

}