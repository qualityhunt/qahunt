<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class Financetotals extends Model
{
    protected $fillable = ['date', 'financetotals', 'total', 'description', 'user_id'];
}
