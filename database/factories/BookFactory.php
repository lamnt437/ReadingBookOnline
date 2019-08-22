<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Book;
use App\Author;
use App\Publisher;
use App\Category;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'time_publish' => $faker->year($max = 'now'),
        'summary' => $faker->sentence,
        'content' => 'https://archive.org/embed/airplanephotogra00ivesuoft',
        'language' => $faker->word,
        'author_id' => function() {
        	$authors = Author::all()->toArray();
        	$author_index = array_rand($authors);
        	$author = $authors[$author_index];
        	return $author['id'];
        },
        'publisher_id' => function() {
        	$publishers = Publisher::all()->toArray();
        	$publisher_index = array_rand($publishers);
        	$publisher = $authors[$publisher_index];
        	return $publisher['id'];
        },
        'category_id' => function() {
        	$categories = Category::all()->toArray();
        	$category_index = array_rand($categories);
        	$category = $categories[$category_index];
        	return $category['id'];
        },
    ];
});
