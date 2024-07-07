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
        Schema::create('cast_film', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cast_id');
            $table->unsignedBigInteger('film_id');
            $table->timestamps();

            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cast_film');
    }
};
