<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleTime extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "schedule_time";
    public $primaryKey = "id";
    public $fillable = ['scheduleable_id' , 'scheduleable_type' , 'time'];

    public function timeable()
    {
        return $this->morphTo();
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class , 'schedule_time_id' , 'id');
    }
}
