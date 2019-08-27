<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\Publisher::class, 20)->create();
        factory(\App\Author::class, 20)->create();
        factory(\App\Category::class, 20)->create();
        factory(\App\Book::class, 50)->create();
        factory(\App\Relations\BookAuthor::class, 10)->create();
        factory(\App\Relations\BookCategory::class, 10)->create();

    }
}
