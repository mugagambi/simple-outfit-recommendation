<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutfitCategory extends Model
{
    /**
     * mass assignable fields
     * @var array
     */
    protected $fillable = ['name'];
}
