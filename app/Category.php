<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function apply(){
        $this->hasMany(ApplyServices::class,'id','category_id');
    }

    public function assign(){
        $this->hasMany(AssignService::class,'id','category_id');
    }
}
