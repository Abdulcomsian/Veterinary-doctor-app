<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentPayment extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "appointment_payment";
    public $primaryKey = "id";
    public $fillable = ['appointment_id' , 'plan_id' , 'price_id'];
}
