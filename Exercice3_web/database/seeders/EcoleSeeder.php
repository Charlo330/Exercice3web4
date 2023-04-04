<?php

namespace Database\Seeders;

use App\Models\CentreServicesScolaire;
use App\Models\Ecole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ecole::factory()
            ->count(10)
            ->create();
    }
}
