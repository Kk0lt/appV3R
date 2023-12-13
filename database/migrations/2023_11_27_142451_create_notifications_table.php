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
        Schema::create('Notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('superieur_id');
            $table->integer('employe_id');
            $table->string('nom_employe', 256);
            $table->string('nom_Form', 256);
            $table->integer('form_id');
            $table->string('statut_superieur', 256);
            $table->string('statut_admin', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Notifications');
    }
};
