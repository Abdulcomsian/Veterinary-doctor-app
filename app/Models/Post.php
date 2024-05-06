<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory , SoftDeletes;

    public $table = "posts";
    public $primaryKey = "id";
    public $fillable = ['created_by' , 'thumbnail_url' , 'video_url' , 'description'];
}
