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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 256);
            $table->string('prenom', 256);
            $table->string('position', 256);
 
            $table->string('superieur_nom', 256);
            $table->integer('superieur_id')->nullable();
            
            $table->string('droit_employe', 256);
            $table->string('droit_superieur', 256);
            $table->string('droit_admin', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
