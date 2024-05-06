<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Appointment;
class AvailabilitySchedule extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "availability_schedules";
    public $primaryKey = "id";
    public $fillable = ['date' , 'time' , 'is_available' ];

    public function appointment()
    {
        return $this->hasOne(Appointment::class , 'schedule_id' , 'id')->where('is_canceled' , 0);
    }

    public function cancelAppointments()
    {
        return $this->hasMany(Appointment::class , 'schedule_id' , 'id')->where('is_canceled' , 1);
    }
}
