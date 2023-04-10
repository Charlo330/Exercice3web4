<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration pour la creation de la table des écoles
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
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('nom',25);
            $table->unsignedBigInteger('centre_services_scolaire_id');
            $table->timestamps();

            $table->foreign('centre_services_scolaire_id')
                ->references('id')
                ->on('centres_services_scolaires')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Annuler la migration
     */
    public function down(): void
    {
        Schema::dropIfExists('ecoles');
    }
};
