<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;
    public function orders(){
        return $this->hasMany(order::class, 'clients_id');
    }
    protected $fillable = [
    'firstname',
    'lastname',
    'email',
    'phone',
    'address',
    'city',
    'document_id',
    'is_active',
];
}
