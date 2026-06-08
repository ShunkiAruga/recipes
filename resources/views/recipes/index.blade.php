<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>レシピ一覧</title>
</head>

<body>

<header>
    レシピ一覧
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
    <a href="{{ route('recipes.create') }}">新規作成</a>

</div>

</body>
</html>