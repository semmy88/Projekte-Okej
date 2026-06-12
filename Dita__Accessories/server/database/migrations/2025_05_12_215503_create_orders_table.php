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
            $table->id(); // Auto-increment primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to Users
            $table->dateTime('order_date'); // Date and time of the order
            $table->enum('status', ['pending', 'completed', 'cancelled']); // Order status
            $table->string('country'); // Country for delivery
            $table->string('city'); // City for delivery
            $table->string('delivery_address'); // Delivery address
            $table->string('second_delivery_address')->nullable(); // Optional second address
            $table->string('phone_number'); // Contact phone number
            $table->text('description')->nullable(); // Optional description
            $table->boolean('payed')->default(false); // Payment status
            $table->string('card_brand')->nullable(); // Card brand (e.g., Visa, MasterCard)
            $table->string('card_type')->nullable(); // Card type (e.g., debit, credit)
            $table->string('card_last_four_numbers')->nullable(); // Last 4 digits of card
            $table->enum('payment_type', ['online', 'cash']); // Payment type
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
