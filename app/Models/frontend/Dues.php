<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    protected $fillable = ['date', 'dues', 'total', 'description', 'user_id'];
}
