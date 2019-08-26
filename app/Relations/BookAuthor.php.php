<?php

namespace App\Relations;

use Illuminate\Database\Eloquent\Model;

class BookAuthor.php extends Model
{
    protected $table = 'author_book';

    protected $fillable = ['author_id', 'book_id'];
}
