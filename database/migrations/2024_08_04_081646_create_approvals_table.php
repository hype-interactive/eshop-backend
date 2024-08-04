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
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('table_name')->nullable();
            $table->string('row_id')->nullable();
            $table->text('edit_package')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('initiator')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->string('action_name')->nullable();

            $table->foreign('initiator')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
