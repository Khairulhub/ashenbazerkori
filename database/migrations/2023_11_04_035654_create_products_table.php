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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('short_describtion')->nullable();
            $table->text('describtion')->nullable();
            $table->string('tags')->nullable();
            $table->unsignedBigInteger('quantity')->default(1);
            $table->integer('regular_price')->default(0);
            $table->string('offer_price')->nullable();
            $table->string('sku_code')->nullable();
            $table->integer('category_id');
            $table->integer('brand_id');         
            $table->integer('product_type')->default(0)->comment('1 for New ,0 for Old');
            $table->integer('featured_item')->default(0)->comment('0 for not featured ,1 for featured');
            $table->integer('status')->default(0)->comment('0 for InActive ,1 for Active');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};