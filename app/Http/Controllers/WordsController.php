<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function index($id) {
        $article_id = strval($id);
        $words = Word::where('article_id', '=', $article_id)->get();
        return $words;
    }

    public function store(Request $request) {
        $word = new Word;
        $word->article_id = $request->article_id;
        $word->word = $request->word;
        $word->mean = $request->mean;
        $word->status = $request->status;
        $word->save();
    }
}
