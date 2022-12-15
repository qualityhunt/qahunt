<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class ShoppingModel extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 'link', 'description'
    ];

    public function getRouteKeyName()
    {
        return  'slug';
    }
}
