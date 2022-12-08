<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'amount', 'duration', 'status', 'admin_id', 'created_at', 'updated_at'];
}
