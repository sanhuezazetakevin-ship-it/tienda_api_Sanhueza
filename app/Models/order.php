<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    public function client(){
        return $this->belongsTo(client::class, 'clients_id');
    }
    protected $fillable = [
    'clients_id',
    'order_date',
    'total_amount',
    'status',
    'payment_method',
    'shipping_address',
];
}
