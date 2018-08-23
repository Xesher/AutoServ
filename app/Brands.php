<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $guarded = 'name';
//    public function brand()
//    {
//        return $this->belongsTo(Car::class, 'brands');
//    }
}
