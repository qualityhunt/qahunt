<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Shoppings extends Model
{
    protected $fillable = ['date', 'shoppings', 'total', 'description', 'user_id'];


    public function shoppings_images()
    {
        return $this->hasMany('App\Models\frontend\shoppings_images');
    }
}
