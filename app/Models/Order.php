<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id', 
    'status', 
    'payment_method', 
    'payment_status', 
    'payment_id',
    'total_price',
    'address',
    'phone',
    'email',
    'name',
    'surname',
    'city',
    'country',
    'postal_code',
    'shipping_price'
];

public function user(){
    return $this->belongsTo(User::class, 'user_id');
}

public function orderDetails(){
    return $this->hasMany(OrderDetail::class, 'order_id');
}
}
