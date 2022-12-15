<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class Financeones extends Model
{
    protected $fillable = ['date', 'financeones', 'total', 'description', 'user_id'];
}
