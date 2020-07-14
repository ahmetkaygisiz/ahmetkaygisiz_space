<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $fillable = [
        'category_id', 'title', 'url', 'subtitle', 'content',
    ];

    public function getRouteKeyName(){
        return 'url';
    }
}
