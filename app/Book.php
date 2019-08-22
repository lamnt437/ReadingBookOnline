<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';
    protected $fillable = ['name', 'time_publish', 'summary', 'content', 'language', 'author_id', 'publisher_id', 'category_id', 'image'];

}
