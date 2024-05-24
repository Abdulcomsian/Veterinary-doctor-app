<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeeklySchedule extends Model
{
    use HasFactory , SoftDeletes;
    public $table = "weekly_schedules";
    public $primaryKey = "id";
    public $fillable = ['day' , 'is_available'];

    public function time()
    {
        return $this->morphMany(ScheduleTime::class , 'timeable');
    }
}
