<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    public $timestamps = false;
    public $fillable = ['content', 'time', 'user_id', 'book_id'];
}
