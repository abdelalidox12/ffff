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
        Schema::create('hotels', function (Blueprint $table) {

            $table->id(column:'id');
            $table->string(column:'Nom_hotel');
            $table->string(column:'Vile_hotel');
            $table->string(column:'Adresse_hotel');
            $table->string(column:'Email_hotel');
            $table->unsignedInteger(column:'Etoile_hotel');
            $table->string(column:'image1');
            $table->string(column:'image2');
            $table->string(column:'image3');
            $table->string(column:'image4');    
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
