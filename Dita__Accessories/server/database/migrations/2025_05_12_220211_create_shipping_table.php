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
        Schema::create('shipping', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Foreign Key to orders
            $table->string('address_line1'); // First address line
            $table->string('address_line2')->nullable(); // Optional second address line
            $table->string('city'); // City
            $table->string('state'); // State
            $table->string('zip_code'); // ZIP code
            $table->string('country'); // Country
            $table->enum('shipping_status', ['pending', 'shipped', 'delivered', 'returned']); // Shipping status
            $table->dateTime('shipping_date')->nullable(); // Optional shipping date
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping');
    }
};
