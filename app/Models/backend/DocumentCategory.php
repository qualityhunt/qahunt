<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{

    public function documentCategories(){

        return $this->hasMany(DocumentCategory::class);
    }

    public function childrenCategories(){

        return $this->hasMany(DocumentCategory::class,"category_id","id");

    }
    public function  parentCategory(){
        return $this->belongsTo(DocumentCategory::class,"category_id","id");
    }
}
