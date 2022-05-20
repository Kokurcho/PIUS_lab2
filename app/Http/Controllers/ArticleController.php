<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    //filter info
    public function index(Request $request): \Illuminate\Contracts\View\View
    {
        $filterParam = $request->input("tag");
        if ($filterParam) {
            $filteredArticles = Article::whereHas('tags', function ($query) use ($filterParam) {
                $query->where('name', '=', $filterParam);
            })->get();
            $articles = $filteredArticles;
        } else {
            $articles = Article::all();
        }
        return View::make('index')
            ->with('articles', $articles);
    }

    // print data
    public function print($code)
    {
        $article = Article::firstWhere('code', $code);
        return View::make('print')->with('article', $article);
    }
}