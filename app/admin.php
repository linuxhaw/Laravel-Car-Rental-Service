<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'users';
    protected $fillable = [
    'id',
    'name',
    'email',
    'address',
    'NRC',
    'phone number',
    'password',
    'status',
    'role_id',
    ];
}
