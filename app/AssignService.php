<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignService extends Model
{
    protected $fillable= [ 'emp_id', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }

    public function assign_list(){
        return $this->hasMany(assign_sub_ist::class,'assign_id','id');
    }

    public function emp(){
        return $this->belongsTo(Employess::class,'emp_id','id');
    }
}
