<?php

namespace Database\Seeders;

use App\Models\CentreServicesScolaire;
use App\Models\Ecole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder pour la table des écoles
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class EcoleSeeder extends Seeder
{
    /**
     * Execution du seeder
     */
    public function run(): void
    {
        Ecole::factory()
            ->count(10)
            ->create();
    }
}
