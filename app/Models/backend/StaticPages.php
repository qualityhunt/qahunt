<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class StaticPages extends Model
{
    use MultiLanguage;


    protected $fillable =  [
         't_title_tr',  't_text_tr',
         'p_title_tr',  'p_text_tr',
         'o_title_tr', 'o_text_tr',
         'g_title_tr',  'g_text_tr',
    ];


    protected $multi_lang  =  [
        't_title',
        't_text',
        'p_title',
        'p_text',
        'o_title',
        'o_text',
        'g_title',
        'g_text',
    ];
}
