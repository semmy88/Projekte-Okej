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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable();    // Add phone_number column
            $table->text('address')->nullable();           // Add address column
            $table->unsignedBigInteger('role_id')->nullable(); // Add role_id column
            
            // Add foreign key constraint for role_id (if roles table exists)
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            table->dropForeign(['role_id']);  // Drop the foreign key constraint
            $table->dropColumn(['phone_number', 'address', 'role_id']); // Drop the added columns
        });
    }
};
