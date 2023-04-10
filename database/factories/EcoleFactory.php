<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory des centres des écoles
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ecole>
 */
class EcoleFactory extends Factory
{
    /**
     * Definition de la factory
     *
     * @return array<string, mixed> Création des colonnes
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->word(),
            'centre_services_scolaire_id' => fake()->numberBetween(1, 8)
        ];
    }
}
