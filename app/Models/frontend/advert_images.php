<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class advert_images extends Model
{
    protected $fillable = ['gallery_id', 'gallery_image_path'];

    public function advert()
    {
        return $this->belongsTo('App\Models\backend\Advert','id','gallery_id');
    }
}
