<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('street', 50);
            $table->text('interior', 10);
            $table->text('exterior', 50);
            $table->string('district', 50);
            $table->text('postal', 5);
            $table->foreignId('locality_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidiaries');
    }
};
