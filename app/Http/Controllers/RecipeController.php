<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecipeService;
use App\Models\Recipe;

class RecipeController extends Controller
{
    private RecipeService $service;

    public function __construct(RecipeService $service)
    {
        $this->service = $service;
    }
    
    //レシピ一覧
    public function index(Request $request)
    {
        $recipes = $this->service->getRecipes(
            $request->keyword
        );

        //viewに結果を渡す
        return view('recipes.index', compact('recipes'));
    }

    //詳細
    public function show($id)
    {
        $recipe = $this->service->getRecipeById($id);

        return view('recipes.show', compact('recipe'));
    }

    // 新規作成フォーム
    public function create()
    {
        return view('recipes.create');
    }

    // 新規作成
    public function store(Request $request)
    {
        $this->service->createRecipe($request->all());

        return redirect()->route('recipes.index');
    }
}
