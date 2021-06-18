<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexAction(Request $request)
    {
        if ($request->has('search')){
            $articles = Article::where('title', 'like', '%'.$request->search.'%')
            ->orWhere('description', 'like', '%'.$request->search.'%')
            ->get();
        }else{
            $articles = Article::all();
        }

        return view('index', ['articles' => $articles]);
    }

}
