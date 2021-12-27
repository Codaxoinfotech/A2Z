<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_services extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_man_id',
        'category_id',
        'sub_category_id',
        'description',
        'lat',
        'long',
        'manual_address',
        'status'
    ];
}
