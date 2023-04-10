<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration pour la creation de la table des centres de services scolaires
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
return new class extends Migration
{
    /**
     * Execution de la migration
     */
    public function up(): void
    {
        Schema::create('centres_services_scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom',25);
            $table->timestamps();
        });
    }

    /**
     * Annuler la migration
     */
    public function down(): void
    {
        Schema::dropIfExists('centres_services_scolaires');
    }
};
