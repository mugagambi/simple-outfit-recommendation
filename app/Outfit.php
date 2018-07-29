<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    /**
     * mass assignable
     * @var array
     */
    protected $fillable = ['name', 'photo_url', 'user_id'];
}
