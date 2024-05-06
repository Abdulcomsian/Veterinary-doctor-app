<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Service extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "services";
    public $primaryKey = "id";
    public $fillable = [ 'name' , 'status' , 'description' , 'image'];
}
