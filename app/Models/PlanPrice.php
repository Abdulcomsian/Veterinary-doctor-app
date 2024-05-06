<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PlanPrice extends Model
{
    use HasFactory , SoftDeletes;
    public $table = "plan_prices";
    public $primaryKey = "id";
    public $fillable = ['plan_id' , 'price'];
}
