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
        Schema::create('grille_audit_ssts', function (Blueprint $table) {
            $table->id();
            $table->integer('employe_id');
            $table->string('lieu', 256);
            $table->string('date', 256);
            $table->string('heure', 256);
            $table->string('epi', 256);
            $table->string('tenue_des_lieux', 256);
            $table->string('comportement_securitaire', 256);
            $table->string('signalisation', 256);
            $table->string('fiches_signalitique', 256);
            $table->string('travaux_excavation', 256);
            $table->string('espace_clos', 256);
            $table->string('methode_de_travail', 256);
            $table->string('autres', 256);
            $table->string('distanciation', 256);
            $table->string('port_epi', 256);
            $table->string('procedures_covid', 256);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grille_audit_ssts');
    }
};
