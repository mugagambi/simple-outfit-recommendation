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

    /**
     * The weather groups for this category.
     */
    public function weather_groups()
    {
        return $this->belongsToMany('App\WeatherGroup');
    }
    /**
     * The events for this category.
     */
    public function events()
    {
        return $this->belongsToMany('App\Event', 'outfit_category_event');
    }
    /**
     * The dress_codes for this category.
     */
    public function dress_modes()
    {
        return $this->belongsToMany('App\DressMode', 'outfit_category_dress_mode');
    }
}
