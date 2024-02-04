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
            $table->id();
            $table->string('group_name');
            $table->string('leadername');
            $table->string('binusian');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('whatsapp')->unique();
            $table->string('line')->unique();
            $table->string('github')->nullable();
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('cv')->nullable();
            $table->string('id_card')->nullable();
            $table->string('flazz_card')->nullable();
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
