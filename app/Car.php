<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brands()
    {
        return $this->hasMany(Brand::class, 'brands');
    }
}
