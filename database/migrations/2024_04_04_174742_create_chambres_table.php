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
        Schema::create('chambres', function (Blueprint $table) {

            $table->id();
            $table->string(column:'Vile_hotel');
            $table->unsignedInteger(column:'n_place');
            $table->unsignedInteger(column:'numero');
            $table->unsignedInteger(column:'N_etape');
            $table->double(column:'prix');
            $table->string(column:'image1');
            $table->string(column:'image2');
            $table->string(column:'image3');
            $table->string(column:'image4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
