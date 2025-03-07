<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    protected $fillable = ['id', 'title', 'description', 'image', 'created_at', 'updated_at'];
}
