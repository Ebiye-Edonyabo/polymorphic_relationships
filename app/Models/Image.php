<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    // one to one inverse
    public function imageable()
    {
        return $this->morphTo();
    }
}
