<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'apply_id', 'item', 'qty', 'price', 'gst', 'total', 'status','createdby','updatedby', 'created_at', 'updated_at'
    ];
}
