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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();


            $table->string(column:'title');
            $table->unsignedBigInteger('id_chambres'); 
            $table->foreign('id_chambres')->references('id')->on('chambres'); 

            $table->unsignedBigInteger('id_vols'); 
            $table->foreign('id_vols')->references('id')->on('vols'); 

            $table->string(column:'Ville_depart');
            $table->integer(column:'N_jour');
            $table->integer(column:'N_persone');
            $table->date(column:'date_depart');
            $table->time(column:'H_depart');
            $table->string(column:'adress_depart');
            $table->unsignedInteger(column:'N_place');
            $table->string(column:'Description');
            $table->string(column:'map');
            $table->double(column:'prix');
            $table->string(column:'image1');
            $table->string(column:'image2');
            $table->string(column:'image3');
            $table->string(column:'image4');    
            $table->string(column:'image5');
            $table->string(column:'T_jour1');
            $table->string(column:'D_jour1');
            $table->string(column:'T_jour2');
            $table->string(column:'D_jour2');
            $table->string(column:'T_jour3');
            $table->string(column:'D_jour3');
            $table->string(column:'T_jour4');
            $table->string(column:'D_jour4');
            $table->string(column:'T_jour5');
            $table->string(column:'D_jour5');
            $table->string(column:'T_jour6');
            $table->string(column:'D_jour6');
            $table->string(column:'T_jour7');
            $table->string(column:'D_jour7');
            $table->string(column:'T_jour8');
            $table->string(column:'D_jour8');
            $table->string(column:'T_jour9');
            $table->string(column:'D_jour9');
            $table->string(column:'T_jour10');
            $table->string(column:'D_jour10');
            $table->string(column:'T_jour11');
            $table->string(column:'D_jour11');
            $table->string(column:'T_jour12');
            $table->string(column:'D_jour12');
            $table->string(column:'T_jour13');
            $table->string(column:'D_jour13');
            $table->string(column:'T_jour14');
            $table->string(column:'D_jour14');
            $table->string(column:'T_jour15');
            $table->string(column:'D_jour15');
            $table->string(column:'T_jour16');
            $table->string(column:'D_jour16');
            $table->string(column:'T_jour17');
            $table->string(column:'D_jour17');
            $table->string(column:'T_jour18');
            $table->string(column:'D_jour18');
            $table->string(column:'T_jour19');
            $table->string(column:'D_jour19');
            $table->string(column:'T_jour20');
            $table->string(column:'D_jour20');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
