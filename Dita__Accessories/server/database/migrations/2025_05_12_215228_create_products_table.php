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
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Product name
            $table->text('description'); // Product description
            $table->decimal('price', 10, 2); // Decimal price
            $table->enum('material', ['gold', 'silver']); // Material enum
            $table->integer('stock'); // Stock quantity
            $table->string('image_url'); // URL for product image
            $table->unsignedBigInteger('category_id'); // Foreign key to Categories
            $table->decimal('discount', 10, 2)->nullable(); // Discount, nullable
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
