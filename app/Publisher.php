<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //
    protected $table = 'publishers';
    public $timestamps = false;
    public $fillable = ['name', 'address'];
}
