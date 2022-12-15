<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class Fianncetwos extends Model
{
    protected $fillable = ['date', 'financetwos', 'total', 'description', 'user_id'];
}
