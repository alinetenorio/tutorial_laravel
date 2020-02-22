<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public $timestamps = false;

    //default function for setting attributes
    //called by the controller 
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str ::slug($value);
    }
}
