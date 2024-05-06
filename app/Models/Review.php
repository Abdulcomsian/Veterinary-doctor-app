<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Appointment;
class Review extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "reviews";
    public $primaryKey = "id";
    public $fillable = ['user_id' , 'appointment_id'  , 'rating' , 'comment' ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class , 'appointment_id' , 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
