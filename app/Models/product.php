<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class, 'categories_id');
    }
    protected $fillable = [
        'categories_id', 
        'orders_id',   
        'name',
        'description',
        'price',
        'stock',
        'is_active',
    ];
}
