<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address',
        'city',
        'country',
        'state',
        'name',
        'phone',
        'email',
        'postal_code',
        'surname'
    ];
}
