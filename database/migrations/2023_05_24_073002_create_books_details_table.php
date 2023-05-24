<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_details', function (Blueprint $table) {
            $table->id('id_book');
            $table->foreignId('id_publisher')->references('id_publisher')->on('publishers');
            $table->string('bookImage');
            $table->string('bookTitle');
            $table->string('bookAuthor');
            $table->string('bookYear');
            $table->text('bookSynopsis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_details');
    }
};
