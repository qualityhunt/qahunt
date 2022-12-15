<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class event_images extends Model
{
    protected $fillable = ['gallery_id', 'gallery_image_path'];

    public function event()
    {
        return $this->belongsTo('App\Models\backend\Event','id','gallery_id');
    }
}
