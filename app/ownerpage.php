<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ownerpage extends Model
{
    protected $table = 'cars';
    protected $primaryKey='car_id';
    protected $fillable = [
    'car_id',
    'owner_id',
    'brand',
    'name',
    'type',
    'price',
    'status',
    'image1',
    'image2',
    'image3',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }
}
