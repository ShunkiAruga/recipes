<?php

namespace App\Services;

use App\Models\Recipe;

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
        return Recipe::create([
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'img_path' => $data['img_path'] ?? null
        ]);
    }
}