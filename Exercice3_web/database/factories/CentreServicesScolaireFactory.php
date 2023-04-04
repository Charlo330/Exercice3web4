<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CentreServicesScolaire>
 */
class CentreServicesScolaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $values = ['Grandes-Seigneuries', 'Hautes-Rivières', 'Marie-Victorin',
            'Saint-Hyacinthe', 'Sorel-Tracy', 'Trois-Lacs',
            'Vallée-des-Tisserands', 'Patriotes'];

        return [
            'nom'=>fake()->unique()->randomElement($values)
        ];
    }
}
