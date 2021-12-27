<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'name',
            'amount',
            'status'
        ];
        
        
    function category(){
         return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
