<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class shoppings_images extends Model
{
    protected $fillable = ['shoppings_id', 'shoppings_image_path'];


    public function shoppings()
    {
        return $this->belongsTo('App\Models\backend\Shoppings');
    }
}
