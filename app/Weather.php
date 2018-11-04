<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    /**
     * mass assignable fields
     * @var array
     */
    protected $fillable = [
        'place',
        'place_short_code',
        'temperature',
        'precipitation',
        'wind',
        'humidity',
        'day'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'day'
    ];
}
