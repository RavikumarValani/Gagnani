<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ourTeam extends Model
{
    protected $fillable = ['id', 'name', 'position', 'sort_order', 'google', 'linkedin','facebook', 'twitter', 'description', 'image', 'created_at', 'updated_at'];
}
