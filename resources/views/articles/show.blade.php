<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル：{{ $articles->title }}</p>
    <p>{!! nl2br(e($articles->body)) !!}</p>
    <div class="button-group">
        <!-- 一覧画面へジャンプする -->
        <button onclick="location.href='/articles'">一覧へ戻る</button>
        <!-- $memoのidを元に編集ページへ遷移する -->
                                                    {{-- 選択した記事をidで検索してeditの中の同じidに飛ぶ --}}
        <button onclick="location.href='/articles/{{ $articles->id }}/edit'">編集する</button>
        <form action="/articles/{{ $articles->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>
</html>
