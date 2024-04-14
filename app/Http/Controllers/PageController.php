<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{

    public function welcome()
    {
        $title = config('app.name');
        $articles = Article::all();
        // $articles = Article::paginate(3);
        // $articles = Article::orderBy('id')->get();
        // $articles = Article::orderBy('id', 'DESC')->get();
        // $articles = Article::orderBy('category')->get();
        // $articles = Article::orderBy('created_at', 'DESC')->take(10)->get();
        // $articles = Article::where('title', 'LIKE', 'XA%ticolo%')->get();
        
        // $person = Person::where('age', '>', 50)->get(); non funziona perché non abbiamo il modello Person

        // $user = \App\Models\User::where('email', 'romeo@example.com')->first();

        // dd($user);
        // $user = \App\Models\User::where('email', 'romeo@example.com')->firstOrFail();

        return view('welcome', compact('title', 'articles'));

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