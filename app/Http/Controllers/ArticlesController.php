<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // インポート記事用
    public function index() {
        // idとタイトルだけgetする
        $articles = Article::limit(3)->get(['id', 'title','summary']);
        return $articles;
    }

    public function seeMoreArticles() {
        $articles = Article::select(['id', 'title','summary'])->orderBy('id', 'desc')
        ->paginate(5);
        return view('articles.seeMoreArticles', [ 'articles' => $articles ]);
    }

    public function find($id) {
        $article = Article::find($id);
        return $article;
    }

    public function show ($id) {
        return response()->view('articles.showInportArticle');
    }

    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->userId = $request->userId;
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
