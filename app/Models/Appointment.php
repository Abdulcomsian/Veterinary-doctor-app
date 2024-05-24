<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{AppointmentPayment};
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory , SoftDeletes;

    public $table = "appointments";
    public $primaryKey = "id";
    public $fillable = ['pet_id' , 'schedule_time_id' , 'plan_id' , 'is_non_schedule' , 'date' , 'status'];

    public function payment()
    {
        return $this->hasOne(AppointmentPayment::class , 'appointment_id' , 'id');
    }

    public function scheduleTime()
    {
        return $this->belongsTo(ScheduleTime::class , 'schedule_time_id' , 'id');
    }
}
