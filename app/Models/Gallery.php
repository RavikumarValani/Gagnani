<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['id','sort_order', 'image', 'type', 'description', 'created_at', 'updated_at'];
}
