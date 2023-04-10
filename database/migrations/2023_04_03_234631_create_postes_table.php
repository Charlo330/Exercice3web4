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
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ecole_id');
            $table->decimal('charge', 3, 2);
            $table->timestamps();

            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Annuler la migration
     */
    public function down(): void
    {
        Schema::dropIfExists('postes');
    }
};
