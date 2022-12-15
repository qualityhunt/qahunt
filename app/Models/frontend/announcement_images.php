<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class announcement_images extends Model
{
    protected $fillable = ['announcement_id', 'announcement_image_path'];
    public function announcement()
    {
        return $this->belongsTo('App\Models\frontend\Announcement');
    }
}
