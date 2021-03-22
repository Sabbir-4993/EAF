<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'category_id', 'title', 'slug', 'image', 'description', 'view', 'user_id', 'date', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('Blog_Category');
    }

}
