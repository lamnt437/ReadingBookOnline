<?php

namespace App\Relations;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    protected $table = 'author_book';

    protected $primaryKey = 'book_id';

    protected $fillable = ['author_id', 'book_id'];
}
