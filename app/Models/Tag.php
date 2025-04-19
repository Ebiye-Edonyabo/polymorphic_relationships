<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    protected $guarded = [];
    
    //many to many inverse for posts
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    //many to many inverse for videos
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
