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
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->enum('unit',['kg','tani','litre'])->nullable();
            $table->double('vendor_price')->nullable();
            $table->double('final_price')->nullable();
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('status',['in_stock','out_of_stock'])->default('in_stock');
            $table->unsignedBigInteger('vendor_id');
            $table->boolean('visibility')->default(false);
            $table->boolean('featured')->default(false);
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
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
