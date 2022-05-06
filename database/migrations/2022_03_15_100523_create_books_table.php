<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('titulo', 1000);
            $table->string('autor', 1000);
            $table->text('descricao');
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->references('id')->on('book_categories')->constrained()->onDelete('cascade');
            $table->enum('status_book',['disponivel', 'indisponivel'])->default('disponivel');

            $table->timestamps();
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
