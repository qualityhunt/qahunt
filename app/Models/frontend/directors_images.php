<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class directors_images extends Model
{
    protected $fillable = ['directors_id', 'directors_image_path'];
    public function post()
    {
        return $this->belongsTo('App\Models\frontend\BoardofDirectors');
    }
}
