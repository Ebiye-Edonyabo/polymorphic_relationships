<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $guarded = [];

    // one to one
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    
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
