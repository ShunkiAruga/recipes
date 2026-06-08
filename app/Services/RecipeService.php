<?php

namespace App\Services;

use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Step;

class RecipeService
{
    // レシピ一覧取得
    public function getRecipes(?string $keyword = null)
    {
        $query = Recipe::query();

        //検索条件
        if ($keyword) {
            $query->where(
                'title',
                'like',
                '%' . $keyword . '%'
            );
        }

        //categoryとingredientsを一緒に取得
        $query->with(['category', 'ingredients', 'steps']);

        //SQLを実行し結果を取得
        return $query->get();
    }

    // レシピ詳細画面
    public function getRecipeById(int $id)
    {
        return Recipe::with(['category', 'ingredients', 'steps'])
            ->findOrFail($id);
    }

    //新規作成
    public function createRecipe(array $data)
    {
        dd($data);
        $recipe = Recipe::create([
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'img_path' => $data['img_path'] ?? null,
        ]);

        if (isset($data['ingredients']) && is_array($data['ingredients'])) {
            foreach ($data['ingredients'] as $ingredient) {
                if (empty($ingredient) || empty($ingredient['name'])) {
                    continue;
                }

                Ingredient::create([
                    'recipe_id' => $recipe->id,
                    'name' => $ingredient['name'],
                    'amount' => $ingredient['amount'] ?? null,
                ]);
            }
        }
        // 工程取得
        if (isset($data['steps']) && is_array($data['steps'])) {

    foreach ($data['steps'] as $step) {

        if (empty($step)) {
            continue;
        }

        Step::create([
            'recipe_id' => $recipe->id,
            'description' => $step,
        ]);
    }
}
        return $recipe;
    }
}