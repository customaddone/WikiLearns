<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function store(Request $request) {
        $word = new Word;
        $word->articlesId = $request->articlesId;
        $word->word = $request->word;
        $word->mean = $request->mean;
        $word->status = $request->status;
        $word->save();
    }
}