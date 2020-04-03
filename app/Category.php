<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function posts(){
        return $this->belongsToMany(Post::class, 'posts_categories', 'category_id', 'post_id');
    }
}
