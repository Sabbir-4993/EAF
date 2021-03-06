<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    protected $table = 'blog_categories';

    protected $fillable = [
        'category', 'slug', 'user_id',
    ];
}
