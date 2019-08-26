<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->year('time_publish');
            $table->text('summary');
            $table->text('content');
            $table->string('language');
            // $table->integer('author_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            // $table->integer('category_id')->unsigned();
            $table->string('image');
            $table->timestamps();
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
