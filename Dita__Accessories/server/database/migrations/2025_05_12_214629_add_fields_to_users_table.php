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
            $table->string('phone_number')->nullable();  // Phone number column
            $table->text('address')->nullable();         // Address column
            $table->unsignedBigInteger('role_id')->nullable(); // Role ID column

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);  // Drop foreign key for role_id
            $table->dropColumn(['phone_number', 'address', 'role_id']); // Drop added columns
        });
    }
};
