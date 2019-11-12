<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    // インポート記事用
    public function index() {
        // idとタイトルだけgetする
        // idの前にはテーブルの名前をつける
       $articles = Article::join('users','users.id','=','articles.user_id')
           ->select('articles.id', 'title', 'summary', 'name')
           ->get();
       return $articles;
    }

    public function seeMoreArticles() {

        $publicArticles = Article::where('user_id', '=', 1)->select(['id', 'title','summary'])
        ->orderBy('id', 'desc')->paginate(5);
        $usersArticles = Article::where('user_id', '=', Auth::id())->select(['id', 'title','summary'])
        ->orderBy('id', 'desc')->paginate(5);

        return view('articles.seeMoreArticles', [ 'publicArticles' => $publicArticles,
        'usersArticles' => $usersArticles]);
    }

    public function find($id) {
        $article = Article::find($id);
        return $article;
    }

    public function show ($id) {
        return response()->view('articles.showInportArticle');
    }

    // ただトークン用のカラムを用意していなかっただけでは...
    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->user_id = ( Auth::check() ) ? Auth::id(): 1;
        $article->article = $request->article;
        $article->summary = $request->summary;
        $article->status = $request->status;
        $article->save();
    }

    public function edit(Request $request) {
        $article = Article::find($request->id);
        $article->article = $request->article;
        $article->save();
    }

    public function del($id) {
        $article = Article::find($id)->delete();
    }

    public function vocabula() {
        return view('articles.vocabula');
    }
    // wiki詳細記事表示用　データはフロント側が取ってくれる
    public function wikishow(Request $request)
    {
        return response()->view('articles.show');
    }

    // 英単語辞書使用用
    public function dict($pass)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request(
            'GET',
            $url = "http://public.dejizo.jp/NetDicV09.asmx/SearchDicItemLite",
            [ 'query' => [
                'Dic' => 'EJdict',
                'Word' => $pass,
                'Scope' => 'HEADWORD',
                'Match' => 'STARTWITH',
                'Merge' => 'AND',
                'Prof' => 'JSON',
                'PageSize' => 1,
                'PageIndex' => 0
            ]],
            // パラメーターがあれば設定
        );
        // レスポンスボディを取得
        $responseBody = $response->getBody()->getContents();
        return $responseBody;
    }

    public function dictshow($passId)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request(
            'GET',
            $url = "http://public.dejizo.jp/NetDicV09.asmx/GetDicItemLite",
            [ 'query' => [
                'Dic' => 'EJdict',
                'Item' => $passId,
                'Loc' => "",
                'Prof' => 'XHTML',
            ]],
            // パラメーターがあれば設定
        );
        // レスポンスボディを取得
        $responseBody = $response->getBody()->getContents();
        return $responseBody;
    }
}
