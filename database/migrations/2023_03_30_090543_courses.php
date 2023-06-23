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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('guruTernak_id');
            $table->foreign('guruTernak_id')->references('id')->on('gurus')->onUpdate('cascade')->onDelete('cascade');
            $table->string('skillLevel');
            $table->string('video');
            $table->string('thumbnail');
            $table->text('description');
            $table->float('rating')->nullable();
            $table->integer('price');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
