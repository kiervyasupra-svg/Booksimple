<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('book_name');
        $table->string('book_author');
        $table->integer('book_stock');
        $table->date('book_date');
        $table->timestamps();
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
