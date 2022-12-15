<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class dues_images extends Model
{
    protected $fillable = ['dues_id', 'dues_image_path'];

    
    public function dues()
    {
        return $this->belongsTo('App\Models\backend\Dues');
    }
}