<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function action(Request $request)
    {
		$article = Article::find($request->id);
        return view('news', ['article' => $article]);
    }
}
