<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'category', 'title', 'subtitle', 'tag', 'image', 'description', 'date', 'user_id', 'status',
    ];
}
