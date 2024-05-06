<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PetPhoto extends Model
{
    use HasFactory , SoftDeletes;

    public $table = "pet_photos";
    public $primaryKey = "id";
    public $fillable = ['pet_id' , 'image' ];
}
