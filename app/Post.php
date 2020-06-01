<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body'];

    public function tags() {

        return $this->belongsToMany('App\Tag');
    }

    public function getShortContentAttribute()
    {
        return substr($this->body, 0, 100) . '...';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
