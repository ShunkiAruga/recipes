<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>レシピ一覧</title>

    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            background: #f5f5f5;
        }

        header {
            background: #ff6b6b;
            color: white;
            padding: 15px;
        }

        .container {
            padding: 20px;
        }

        .search-box {
            margin-bottom: 20px;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
        }

        a {
            color: #ff6b6b;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    🍳 レシピ一覧
</header>

<div class="container">

    <!-- 検索フォーム -->
    <form method="GET" action="{{ route('recipes.index') }}" class="search-box">
        <input type="text" name="keyword" placeholder="レシピ検索" value="{{ request('keyword') }}">
        <button type="submit">検索</button>
    </form>

    <!-- レシピ一覧 -->
    @foreach ($recipes as $recipe)
        <div class="card">

            <!-- タイトル -->
            <div class="title">
                {{ $recipe->title }}
            </div>

            <!-- カテゴリ -->
            <p>
                カテゴリ：{{ $recipe->category->name ?? '未設定' }}
            </p>

            <!-- 詳細リンク -->
            <a href="{{ route('recipes.show', $recipe->id) }}">
                詳細を見る →
            </a>

        </div>
    @endforeach

</div>

</body>
</html>