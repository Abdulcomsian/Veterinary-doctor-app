<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Subscription extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "subscription";
    public $primaryKey = "id";
    public $fillable = ['user_id' , 'plan_id' , 'is_yearly_subscribed'];
}
