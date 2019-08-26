<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Relations\BookAuthor;
use App\Book;
use App\Author;

$factory->define(BookAuthor::class, function (Faker $faker) {
    return [
        'book_id' => function() {
        	$books = Book::all()->toArray();
        	$book_index = array_rand($books);
        	$book = $books[$book_index];
        	return $book['id'];
        },

        'author_id' => function() {
        	$authors = Author::all()->toArray();
        	$author_index = array_rand($authors);
        	$author = $authors[$author_index];
        	return $author['id'];
        }
    ];
});
