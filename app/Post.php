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
        return substr(strip_tags($this->body), 0, 100) . '...';
        //return str_limit(strip_tags($this->$this->body),100,'...');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeSearch($query, $seach)
    {
        return $query->where('title', 'LIKE', "%$seach%");
    }

}
