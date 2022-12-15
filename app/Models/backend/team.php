<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class team extends Model
{
    use MultiLanguage;

    protected $fillable = [
 'name_tr','text_tr','position_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'name',
        'text',
        'position',
    ];

}
