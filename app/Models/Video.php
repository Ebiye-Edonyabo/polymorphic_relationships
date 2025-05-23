<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    // one to many
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // many to many
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
