<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class ShoppingModel extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 'description', 'type',
    ];

    public function getRouteKeyName()
    {
        return  'slug';
    }
}
