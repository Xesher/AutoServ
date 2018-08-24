<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{
    protected $guarded = ['name', 'model'];

    public function car()
    {
        return $this->belongsTo(Brand::class);
    }
}
