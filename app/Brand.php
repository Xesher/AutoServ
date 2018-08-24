<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['name'];
    public function brand()
    {
        return $this->hasMany(CarModels::class);
    }
}