<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_teams', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('leadername');
            $table->string('binusian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_teams');
    }
};
