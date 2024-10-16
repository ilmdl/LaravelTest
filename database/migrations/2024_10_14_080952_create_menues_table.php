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
        Schema::create('menues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('allergens');
            $table->string('offers');
            $table->integer('price');
            $table->integer('is_available');
            // $table->integer('category_id');
            $table->foreignId('category_id')->constrained('categories', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menues');
    }
};
