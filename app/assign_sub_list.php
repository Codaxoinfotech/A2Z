<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assign_sub_list extends Model
{
    protected $fillable= [ 'sub_category_id', 'assign_id'];
    
    public function sub_category(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }

    public function assign_service(){
        return $this->belongsTo(AssignService::class,'assign_id','id');
    }
}
