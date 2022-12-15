<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class financetotals_images extends Model
{
    protected $fillable = ['financetotals_id', 'financetotals_image_path'];

    
    public function financetotals()
    {
        return $this->belongsTo('App\Models\backend\Financetotals');
    }
}