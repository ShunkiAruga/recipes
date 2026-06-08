<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::create([
            'category_id' => 1,
            'title' => '親子丼',
            'img_path' => 'oyakodon.jpg',
        ]);

        Recipe::create([
            'category_id' => 2,
            'title' => 'カレー',
            'img_path' => 'carry.jpg',
        ]);
    }
}
