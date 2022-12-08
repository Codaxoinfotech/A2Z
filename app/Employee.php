<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','emp_SN','mobile','mobile2','address','admin_id','status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function apply_service(){
        return $this->hasMany(ApplyServices::class,'emp_id','id');
    }
}
