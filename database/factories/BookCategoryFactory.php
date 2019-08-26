<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Book;
use App\Category;
use App\Relations\BookCategory;

$factory->define(BookCategory::class, function (Faker $faker) {
    return [
        'book_id' => function() {
        	$books = Book::all()->toArray();
        	$book_index = array_rand($books);
        	$book = $books[$book_index];
        	return $book['id'];
        },

        'category_id' => function() {
        	$categories = Category::all()->toArray();
        	$category_index = array_rand($categories);
        	$category = $categories[$category_index];
        	return $category['id'];
        }
    ];
});
