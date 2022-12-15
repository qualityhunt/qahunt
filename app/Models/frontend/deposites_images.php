<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class deposites_images extends Model
{
    protected $fillable = ['deposites_id', 'deposites_image_path'];

    
    public function deposites()
    {
        return $this->belongsTo('App\Models\backend\Deposites');
    }
}