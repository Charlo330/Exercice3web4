<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory des centres de services scolaires
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CentreServicesScolaire>
 */
class CentreServicesScolaireFactory extends Factory
{
    /**
     * Definition de la factory
     *
     * @return array<string, mixed> Création des colonnes
     */
    public function definition(): array
    {
        /**
         * Donnes possibles a la creation
         */
        $values = ['Grandes-Seigneuries', 'Hautes-Rivières', 'Marie-Victorin',
            'Saint-Hyacinthe', 'Sorel-Tracy', 'Trois-Lacs',
            'Vallée-des-Tisserands', 'Patriotes'];

        return [
            'nom'=>fake()->unique()->randomElement($values)
        ];
    }
}
