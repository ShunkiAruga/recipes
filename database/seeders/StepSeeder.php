<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            'recipe_id' => 1,
            'description' => '材料を切る',
        ]);

        Step::create([
            'recipe_id' => 1,
            'description' => '煮る',
        ]);

        Step::create([
            'recipe_id' => 2,
            'description' => '乱切りにする',
        ]);

    }
}
