<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class Event extends Model
{
    use MultiLanguage;

    protected $fillable = [
        'name_tr','text_tr','location_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'name',
        'text',
        'location',
    ];


    public function getRouteKeyName()
    {
        return  'slug';
    }



    public function gallery_images()
    {
        return $this->hasMany('App\Models\frontend\event_images','gallery_id','id');
    }

}
