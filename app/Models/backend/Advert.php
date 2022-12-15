<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
 
class Advert extends Model
{

 
    protected $fillable = [
        'title_tr',

    ];

 

    public function gallery_images()
    {
        return $this->hasMany('App\Models\frontend\advert_images','gallery_id','id');
    }




}
