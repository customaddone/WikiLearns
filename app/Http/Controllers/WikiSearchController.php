<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WikiSearchController extends Controller
{
    public function homeSearch($pass)
    {
        $client = new \GuzzleHttp\Client();
        // clientの内部でURLとパスを結合させるとエラーがでる　なんで
        $searchUrl = 'https://en.wikipedia.org/w/api.php?format=json&action=query&list=search&srlimit=3&srsearch=' . $pass;

        $response = $client->request(
            'GET',
            $url = $searchUrl
            // パラメーターがあれば設定
        );
        // file_get_contentsでしっかりjsonのデータを取得出来る
        return file_get_contents($url);
    }

}
