<?php

namespace Database\Seeders;

use App\Models\CentreServicesScolaire;
use Illuminate\Database\Seeder;

/**
 * Seeder pour la table des centres de services scolaires
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class CentreServicesScolaireSeeder extends Seeder
{
    /**
     * Execution du seeder
     */
    public function run(): void
    {
        CentreServicesScolaire::factory()
            ->count(8)
            ->create();
    }
}
