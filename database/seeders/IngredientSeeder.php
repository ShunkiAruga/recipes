<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::create([
            'recipe_id' => 1,
            'name' => '鶏肉',
            'amount' => '200g'
        ]);
        
        Ingredient::create([
            'recipe_id' => 1,
            'name' => '玉ねぎ',
            'amount' => '4分の1'
        ]);
        Ingredient::create([
            'recipe_id' => 2,
            'name' => '牛肉',
            'amount' => '200g'
        ]);

    }
}
