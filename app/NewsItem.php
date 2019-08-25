<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    protected $fillable = [
        'title', 'description', 'image','writer'
    ];

    protected $table = 'news';
}
