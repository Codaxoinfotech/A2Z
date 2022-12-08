<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyServices extends Model
{
    protected $fillable = ['apply_no', 'reason', 'lat', 'long', 'category_id', 'sub_category_id', 'user_id', 'emp_id', 'status', 'apply_date', 'apply_time', 'assign_date', 'assign_time', 'proccess_date', 'proccess_time', 'pending_date', 'pending_time', 'work_finish_date', 'work_finish_time', 'finish_date', 'finish_time', 'review', 'rating'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function paytms(){
        return $this->hasMany(Paytm::class,'apply_id','id');
    }
}
