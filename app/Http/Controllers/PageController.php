<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{

    public function welcome()
    {
        $title = config('app.name');

        //$articles = Article::paginate(3);
        // $articles = Article::orderBy('id')->get();
        // $articles = Article::orderBy('id', 'DESC')->get();
        // $articles = Article::orderBy('category')->get();
        $articles = Article::orderBy('created_at', 'DESC')->take(4)->get();
        // $articles = Article::where('title', 'LIKE', '%ticolo%')->get();
        
        // $person = Person::where('age', '>', 50)->get(); non funziona perché non abbiamo il modello Person

        // $user = \App\Models\User::where('email', 'giuseppe@example.com')->first();
        // $user = \App\Models\User::where('email', 'giuseppe@example.com')->firstOrFail();

        return view('welcome', compact('title', 'articles'));

    }

    public function aboutMe()
    {
        $name = 'Romeo';

        return view('pages.about-me', [
            'title' => $name,
            'description' => 'I am a Laravel Student',
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