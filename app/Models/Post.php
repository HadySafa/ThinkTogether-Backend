<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['user_id','title','description','link','codesnippet','category_id'];

    public $timestamps = false;

    // Eloquent Relationships
    public function user()
    {
        return $this->belongsTo(User::class); // author
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

}
