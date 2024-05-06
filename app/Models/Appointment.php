<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{AppointmentPayment , AvailabilitySchedule , WeeklySchedule};
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory , SoftDeletes;

    public $table = "appointments";
    public $primaryKey = "id";
    public $fillable = ['pet_id' , 'schedule_id' , 'weekly_schedule_id' , 'plan_id' , 'is_canceled'];

    public function payment()
    {
        return $this->hasOne(AppointmentPayment::class , 'appointment_id' , 'id');
    }

    public function schedule()
    {
        return $this->belongsTo(AvailabilitySchedule::class , 'schedule_id' , 'id');
    }

    public function weeklySchedule()
    {
        return $this->belongsTo(WeeklySchedule::class , 'weekly_schedule_id' , 'id');
    }
}
