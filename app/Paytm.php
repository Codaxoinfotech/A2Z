<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    protected $fillable = ['apply_id','user_id', 'name', 'mobile', 'email', 'status', 'fee','fee_type', 'order_id', 'transaction_id'];

    public function apply(){
        return $this->belongsTo(ApplyServices::class,'apply_id','id');
    }
}
