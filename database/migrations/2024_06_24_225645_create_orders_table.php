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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->double('total')->nullable();
            $table->string('order_id')->nullable();
            $table->string('date')->nullable();
            $table->text('callback')->nullable();
            $table->string('payment_method')->nullable();
             $table->string('payment_status')->nullable();
             $table->string('status')->nullable();
            $table->string('payment_number')->nullable();
             $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
