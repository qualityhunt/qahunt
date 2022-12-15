<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class financetwos_images extends Model
{
    protected $fillable = ['financetwos_id', 'financetwos_image_path'];

    
    public function financetwos()
    {
        return $this->belongsTo('App\Models\backend\financetwos');
    }
}