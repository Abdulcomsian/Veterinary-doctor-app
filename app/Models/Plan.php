<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlanPrice;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
class Plan extends Model
{
    use HasFactory , SoftDeletes;
    
    public $table = "plans";
    public $primaryKey = "id";
    public $fillable = ['created_by' , 'discount_percentage', 'title' , 'is_recommended', 'status', 'description', 'image' ];

    protected static function booted()
    {
        static::addGlobalScope('plan-detail' , function (Builder $builder) {
            $builder->with('latestPrice');
        });
    }

    public function priceHistory()
    {
        return $this->hasMany(PlanPrice::class , 'plan_id' , 'id');
    }
    
    public function latestPrice()
    {
        return $this->hasOne(PlanPrice::class , 'plan_id' , 'id')->latestOfMany();
    }
}
