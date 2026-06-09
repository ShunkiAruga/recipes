<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>レシピ作成</title>
    </head>
    <body>
        <h1>レシピ作成</h1>
        <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        <!-- タイトル取得 -->
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

        <!-- カテゴリー選択 -->
            @csrf
            <div>
                <label for="category_id">カテゴリー</label>
                <select name="category_id" id="category_id">
                    <option value="">カテゴリーを選択してください</option>
                    @foreach ($categorys as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

        <!-- 画像取得 -->
            <div>
                <label for="img_path">画像パス</label>
                <input
                    type="file"
                    id="img_path"
                    name="img_path"
                    value="{{ old('img_path') }}"
                >
            </div>

        <!-- 材料登録 -->
            @csrf
            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[0][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[0][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[1][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[1][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[2][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[2][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[3][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[3][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[4][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[4][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[5][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[5][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[6][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[6][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[7][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[7][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[8][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[8][amount]">
            </div>

            <div>
                <label>材料名：</label>
                <input type="text" name="ingredients[9][name]">

                <label>分量：</label>
                <input type="text" name="ingredients[9][amount]">
            </div>

            <br>

            <div>
                <label>工程：</label>
                <input type="text" name="steps[]">
            </div>

        <!-- 登録ボタン -->
            <button type="submit">
                登録
            </button> 
        </form>
        <!-- 一覧画面へ -->
        <a href="{{ route('recipes.index') }}">
            一覧へ戻る
        </a>
    </body>
</html>