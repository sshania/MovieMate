<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('rating', ['SU', 'R 13+', 'D 17+']);
            $table->integer('duration');
            $table->string('genre');
            $table->string('producer');
            $table->string('director');
            $table->string('writer');
            $table->string('production_house');
            $table->text('casts');
            $table->text('description');
            $table->date('release_date');
            $table->string('movie_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
