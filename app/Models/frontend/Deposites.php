<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class Deposites extends Model
{
    protected $fillable = ['date', 'deposites', 'total', 'description', 'user_id'];
}
