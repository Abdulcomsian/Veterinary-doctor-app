<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalHistory extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "medical_history";
    public $primaryKey = "id";
    public $fillable = ['pet_id' , 'file_link'];

}
