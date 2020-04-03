<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'user_id'
    ];

    public $timestamps = false;

    //default function for setting attributes
    //called by the controller 
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'posts_categories', 'post_id', 'category_id');
    }
    
}
