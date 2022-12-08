<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function apply(){
        return $this->hasMany(ApplyServices::class,'id','sub_category_id');
    }

    public function assign_service_list(){
        return $this->hasMany(assign_sub_list::class,'id','sub_category_id');
    }
}
