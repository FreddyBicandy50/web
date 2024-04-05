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
        Schema::create('bookslist', function (Blueprint $table) {
            $table->id();
            $table->string('title') ;
            $table->String('author');
            $table->String('publish_date');
            $table->String('pages');
            $table->String('cover_link');
            $table->String('book_link');
            $table->String('heading');
            $table->String('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookslist');
    }
};
