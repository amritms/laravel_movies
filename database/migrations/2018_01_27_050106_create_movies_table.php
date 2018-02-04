<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->year('release_date')->nullable();
            $table->decimal('ratings')->nullable();
            $table->string('keywords')->nullable();
            $table->string('storyline')->nullable();
            $table->string('taglines')->nullable();

            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();


//            $table->integer('language_id');
//            $table->integer('genre_id');
            //plot keywords
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
