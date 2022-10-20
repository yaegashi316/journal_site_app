<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
        // ↓サブクラス                 ↓スーパークラス(もとのクラス親)
class ArticleController extends Controller
{
    // indexページへ移動
    // 全件画面に表示する処置
    //index viewに$articlesを表示させるindex関数
    public function index()
    {
        // articleテーブル全件取得する処理
        $articles = Article::all();
        //articlesフォルダのindexファイルに返す
        return view('articles.index', ['articles' => $articles]);
    }

    // showページへ移動
    public function show($id)
    {
        $articles = Article::find($id);
        return view('articles.show', ['articles' => $articles]);
    }
    //createページへ移動
    public function create()
    {
        return view('articles.create');
    }

    //新規登録の処理        ↓？？？
    public function store(Request $request)
    {   
         // インスタンスの作成  ↓new + class名
        $articles = new Article;

        // 値の用意  ↓？？？articlesテーブルのtitleに$requestのtitleを代入、bodyに$requestのbodyを代入？？？？
        $articles->title = $request->title;
        $articles->body = $request->body;

        // インスタンスに値を設定して保存
        $articles->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }
    //articleを編集する機能
    //①編集したいデータを取得してビューに渡す機能
    public function edit($id) 
    {
        //idを見つけたら
        $article = Article::find($id);
        //edit.blade.phpに飛ばす
        return view('articles.edit', ['article' => $article]);
    }
        //②編集機能     ([1]違うところ=もともとあったデータを取得すること [2]新規登録とほぼ同じ=理由:入力してviewに飛ばす。 )
    public function update(Request $request, $id) 
    {
        //[1]   ここはidで探して持ってくる以外はstoreと同じ
        $article = Article::find($id);

        //[2]   値の用意
        $article->title = $request->title;
        $article->body = $request->body;

        //[2]  保存
        $article->save();

        //[2]   登録したらindexに戻る
        return redirect('/articles');
    }

    //③削除機能
    public function destroy($id)
    {
        //idを探して
        $memo = Article::find($id);
        //消す  ↓dereteメソッド(もとからあるメソッド)
        $memo->delete();
        // 一覧画面へ戻る
        return redirect('/articles');
    }
}
