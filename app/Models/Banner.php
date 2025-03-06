<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Banner extends Model
{    
    protected $fillable = ['id','sort_order', 'title', 'description', 'image', 'created_at', 'updated_at'];
}
