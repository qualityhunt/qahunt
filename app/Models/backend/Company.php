<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['name','category','adress','konum','detail'];


    public function getRouteKeyName()
    {
        return  'slug';
    }

    public function il_getir()
    {
        return $this->belongsTo(Iller::class, 'category_il','id');
    }
}
