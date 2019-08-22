<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
    protected $table = 'rates';
    public $timestamps = false;
    public $fillable = ['user_id', 'book_id', 'score'];
}
