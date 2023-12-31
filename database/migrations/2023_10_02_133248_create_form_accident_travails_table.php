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
        Schema::create('form_accident_travails', function (Blueprint $table) {
            $table->id();
            $table->integer('employe_id');

            $table->string('date', 256);
            $table->string('heure', 256);
            // $table->string('temoin', 256);
            $table->string('nom_temoin', 256);
            $table->string('endroit', 256);
            $table->string('secteur', 256);

            //les checkboxes
            $table->string('blessure_tete', 256);
            $table->string('blessure_torse', 256);
            $table->string('blessure_poumon', 256);
            $table->string('blessure_bras', 256);
            $table->string('blessure_poignets', 256);
            $table->string('blessure_dos', 256);
            $table->string('blessure_hanche', 256);
            $table->string('blessure_jambe', 256);
            $table->string('blessure_pied', 256);
            $table->string('blessure_autre', 256);

            $table->text('description_blessure')->nullable();
            $table->text('violence')->nullable();

            $table->string('tache', 256);
            $table->string('soin', 256);
            $table->string('secouriste', 256);


            $table->string('absence', 256);
            $table->string('superieur', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_accident_travails');
    }
};
