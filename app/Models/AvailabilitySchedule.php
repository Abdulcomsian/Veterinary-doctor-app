<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{ ScheduleTime};
class AvailabilitySchedule extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "availability_schedules";
    public $primaryKey = "id";
    public $fillable = ['date' , 'is_available' ];

    public function time()
    {
        return $this->morphMany(ScheduleTime::class , 'timeable');
    }

}
