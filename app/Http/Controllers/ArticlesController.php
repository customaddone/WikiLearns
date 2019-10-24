<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function wikishow(Request $request)
    {
        return response()->view('articles.show');
    }
}
