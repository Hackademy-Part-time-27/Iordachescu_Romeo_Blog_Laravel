<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;

    public function __construct()
    {
        $this->articles = [
            ['title' => 'What is HTML?', 'category' => 'Hypertext markup language', 'description' => "Hypertext: text (often with embeds such as images, too) that is organized in order  to connect related items. Markup: a style guide for typesetting anything to be printed in hardcopy or soft copy format Language: a language that a computer system understands and uses to interpret commands.
            
            HTML determines the structure of web pages. This structure alone is not enough to make a web page look good and interactive. So you'll use assisted technologies such as CSS and JavaScript to make your HTML beautiful and add interactivity, respectively.", 'visible' => true],

            ['title' => 'What is JavaScript?', 'category' => 'Programming languages', 'description' => 'JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area.', 'visible' => true],

            ['title' => 'What is PHP?', 'category' => 'Hypertext processor', 'description' => 'PHP is an acronym for "PHP: Hypertext Preprocessor", PHP is a widely-used, open source scripting language,PHP scripts are executed on the server, PHP is free to download and use.', 'visible' => true],
        ];
    }

    public function welcome()
    {
        $title = "Welcome to everyone";

        return view('welcome', compact('title'));

    }

    public function contacts()
    {
        return view('pages.contacts');
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
       
        return view('pages.articles', ['articles' => $this->articles]);
    }

    public function article($article)
    {
        $article = $this->articles[$article];

        if(! $article['visible']) {
            
       

            abort(404);

        }

        return view('pages.article', ['article' => $article]);
    }
   
}