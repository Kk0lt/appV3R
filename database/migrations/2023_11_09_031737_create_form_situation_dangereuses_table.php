s<?php

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
        Schema::create('form_situation_dangereuses', function (Blueprint $table) {
            $table->id();
            $table->integer('employe_id');
            $table->string('date', 256);
            $table->string('heure', 256);
            //$table->string('temoin', 256);
            $table->string('nom_temoin', 256);
            $table->string('description', 256);
            $table->string('corrections', 256);
            $table->string('superieur_averti', 256);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formsSituationDangereuses');
    }
};
