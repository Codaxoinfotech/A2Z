<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'serviceName',
        'description',
        'cost',
        'createdBy',
        'status'
    ];

    public function categories()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

    public function sub_categories()
    {
        return $this->belongsTo(subCategory::class, 'sub_category_id', 'id');
    }

}
