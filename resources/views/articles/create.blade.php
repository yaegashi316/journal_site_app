<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>paper create</title>
</head>
<body>
    <a href="/articles">戻る</a>
    <h1>新規論文投稿</h1>
    <form action="/articles" method="post">
        {{-- CSRF対策 --}}
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body"></textarea>
        </p>

        <input type="submit" value="登録">
    </form>
</body>
</html>
