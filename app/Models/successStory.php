<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class successStory extends Model
{
    protected $fillable = ['id', 'sort_order','description', 'image', 'created_at', 'updated_at'];
}
