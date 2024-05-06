<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Appointment};
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory , SoftDeletes;

    public $table = "pets";
    public $primaryKey = "id";
    public $fillable = ['name' , 'age' , 'breed'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class , 'pet_id' , 'id');
    }
}
