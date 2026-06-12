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
        Schema::create('return_requests', function (Blueprint $table) {
            $table->id();  // Primary Key
            $table->unsignedBigInteger('order_id');  // Foreign Key to Orders
            $table->text('reason');  // Reason for the return
            $table->enum('status', ['pending', 'approved', 'rejected', 'completed']);  // Status of the return request
            $table->timestamp('requested_date')->useCurrent();  // Requested date (defaults to current timestamp)
            $table->timestamp('processed_date')->nullable();  // Processed date (optional)
            
            // Foreign key relationship to the Orders table (assuming you have an Orders model)
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_request');
    }
};
