<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class financeones_images extends Model
{
    protected $fillable = ['financeones_id', 'financeones_image_path'];

    
    public function financeones()
    {
        return $this->belongsTo('App\Models\backend\financeones');
    }
}