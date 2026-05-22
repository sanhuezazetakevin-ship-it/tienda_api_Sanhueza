<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    public function products(){
        return $this->hasMany(product::class, 'categories_id');

    }
    protected $fillable = [
    'name',
    'description',
    'is_active',
];
}
