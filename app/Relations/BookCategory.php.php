<?php

namespace App\Relations;

use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\Category;

class BookCategory.php extends Model
{
    protected $table = 'book_category';

    protected $fillable = ['book_id', 'category_id'];
}
