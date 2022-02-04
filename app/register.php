<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = 'users';
    protected $fillable = [
    'id',
    'name',
    'email',
    'role_id',
    'address',
    'NRC',
    'phone_number',
    'password',
    ];
}
