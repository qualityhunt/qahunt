<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class Member_Posting extends Model
{
 
    protected $table = "member_postings";


    protected $fillable = [
        'title_tr',

    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title',

    ];

    
    public function member_post()
    {
        return $this->hasMany('App\Models\frontend\member_post');
    }
}