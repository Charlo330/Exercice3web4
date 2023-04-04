<?php

namespace Database\Seeders;

use App\Models\CentreServicesScolaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CentreServicesScolaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CentreServicesScolaire::factory()
            ->count(8)
            ->create();
    }
}
