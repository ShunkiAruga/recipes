<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>レシピ作成</title>
</head>
<body>

    <h1>レシピ作成</h1>

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">レシピ名</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
        </div>

        <br>

        <div>
            <label for="category_id">カテゴリID</label>
            <input
                type="number"
                id="category_id"
                name="category_id"
                value="{{ old('category_id') }}"
            >
        </div>

        <br>

        <div>
            <label for="img_path">画像パス</label>
            <input
                type="text"
                id="img_path"
                name="img_path"
                value="{{ old('img_path') }}"
            >
        </div>

        <br>

        <button type="submit">
            登録
        </button>

    </form>

    <br>

    <a href="{{ route('recipes.index') }}">
        一覧へ戻る
    </a>

</body>
</html>