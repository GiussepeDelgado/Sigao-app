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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rol')->nullable();
            $table->string('position')->nullable();
            $table->string('dni')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
