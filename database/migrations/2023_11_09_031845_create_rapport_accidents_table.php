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
        Schema::create('rapport_accidents', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('employe_id'); //employe qui a rempli
            
            $table->string('noUnite', 256);
            $table->string('departement', 256);
            $table->string('noPermis', 256);
            $table->string('autres_vehicule', 256);

            //$table->foreign('employe_id')->references('id')->on('employes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapportAccidents');
    }
};
