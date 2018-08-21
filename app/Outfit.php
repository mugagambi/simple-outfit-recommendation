<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    /**
     * mass assignable
     * @var array
     */
    protected $fillable = ['name', 'photo_url', 'user_id', 'outfit_category_id'];

    /**
     * Get the outfit category that the outfit belongs to.
     */
    public function outfit_category()
    {
        return $this->belongsTo('App\OutfitCategory');
    }
}
