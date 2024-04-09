<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class PageController extends Controller
{
    public function welcome()
    {
        $title = config('app.name');

        return view('welcome', compact('title'));

    }

    public function aboutMe()
    {
        $name = 'Romeo';

        return view('pages.about-me', [
            'title' => $name,
            'description' => "I am from Republic of Moldova.<br>I'm Hackademy Part-Time IT 27 student.",
        ]);
    }


    public function articles()
    {   
        $articles = Article::where('visible', true)->get();
        return view('pages.articles', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('pages.article', ['article' => $article]);
    }
   
}