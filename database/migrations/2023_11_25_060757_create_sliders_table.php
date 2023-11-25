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
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title') -> nullable();
            $table->text('description') -> nullable();
            $table->string('button_text') -> nullable();
            $table->string('button_url')->nullable();
            $table->text('image')->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};