<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'car_rent';
    protected $fillable = [
    'user_id',
    'car_id',
    'owner_id',
    'price',
    'status',
    'pickup_date',
    'days',
    ];

    
}
