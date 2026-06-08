<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $recipe->title }}</title>
</head>

<body>

<header>
    レシピ詳細
</header>

<div class="container">

    <div class="card">

        <!-- タイトル -->
        <h1>{{ $recipe->title }}</h1>

        <!-- カテゴリ -->
        <p>カテゴリ：{{ $recipe->category->name }}</p>

        <!-- 画像（あれば） -->
        @if($recipe->img_path)
            <img src="{{ asset('storage/' . $recipe->img_path) }}" width="300">
        @endif

        <!-- 材料 -->
        <h2>材料</h2>
        <ul>
            @foreach ($recipe->ingredients as $ingredient)
                <li>
                    {{ $ingredient->name }}：{{ $ingredient->amount }}
                </li>
            @endforeach
        </ul>

        <!-- 手順 -->
        <h2>作り方</h2>
        <ol>
            @foreach ($recipe->steps as $step)
                <li>
                    {{ $step->description }}
                </li>
            @endforeach
        </ol>

        <!-- 戻るリンク -->
        <a href="{{ url('/recipes') }}">
            ← 一覧に戻る
        </a>

    </div>

</div>

</body>
</html>