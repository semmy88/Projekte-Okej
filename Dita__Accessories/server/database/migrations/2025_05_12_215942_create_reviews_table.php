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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key to products
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users
            $table->integer('rating')->unsigned()->check('rating >= 1 AND rating <= 5'); // Rating (1-5)
            $table->text('comment')->nullable(); // Optional comment
            $table->timestamps(); // Automatically includes 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
