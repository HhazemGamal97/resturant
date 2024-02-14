<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasApiTokens;

    protected $hidden = ['password'];

    protected $fillable = ['name','email','password'];
}
