<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function media()
    {
        return $this->belongsTo(Service::class);
    }
}
