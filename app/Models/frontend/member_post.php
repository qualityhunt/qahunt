<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class member_post extends Model
{
  
    protected $fillable = ['gallery_id', 'gallery_image_path','name_tr'];

    public function member_post()
    {
        return $this->belongsTo('App\Models\backend\Member_Posting');
    }
}