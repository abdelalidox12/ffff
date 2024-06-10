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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_chambres'); 
            $table->foreign('id_chambres')->references('id')->on('chambres'); 
            $table->date(column:'Date_debut');
            $table->date(column:'date_depart');
            $table->double('prix');
            $table->string(column:'Name');
            $table->string(column:'phone');
            $table->string(column:'email');
            $table->string(column:'sex');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
