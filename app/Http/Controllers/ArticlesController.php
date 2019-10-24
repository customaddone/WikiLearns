<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function wikishow(Request $request)
    {
        return response()->view('articles.show');
    }

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
