<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subCategoryName',
        'createdBy',
        'status',
        'img'
    ];

    public function categories()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

}
