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
    <a href="/articles/{{ $article->id }}">戻る</a>
    <h1>投稿論文編集</h1>
                {{-- ↓ *=0回以上の繰り返し   ↓PUTは既存リソースの上書き、PATCHは既存リソースの一部更新。 POSTはリソース--}}
    <form action="/articles/{{ $article->id }}" method="post">
        {{-- CSRF対策 --}}
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" value="{{ $article->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ $article->body }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>
</html>
