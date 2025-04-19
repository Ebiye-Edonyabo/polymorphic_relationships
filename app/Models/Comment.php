<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    // one to many inverse
    public function commentable() 
    {
        return $this->morphTo();
    }
}
