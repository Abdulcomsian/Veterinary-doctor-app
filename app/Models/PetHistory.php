<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PetHistory extends Model
{
    use HasFactory , SoftDeletes;
   
    public $table = "pet_histories";
    public $primaryKey = "id";
    public $fillable = ['pet_id' , 'file' , 'breed'];
}
