<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        Article::create([
            'title'=>'What is HTML?',
            'category'=>'Hypertext markup language',
            'description'=>"Hypertext: text (often with embeds such as images, too) that is organized in order  to connect related items. Markup: a style guide for typesetting anything to be printed in hardcopy or soft copy format Language: a language that a computer system understands and uses to interpret commands.HTML determines the structure of web pages. This structure alone is not enough to make a web page look good and interactive. So you'll use assisted technologies such as CSS and JavaScript to make your HTML beautiful and add interactivity, respectively.",
           'visible'=>true,
        ]);
        Article::create([
            'title'=>'What is JavaScript?',
            'category'=>'Programming languages',
            'description'=>'JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area.',
           'visible'=>true,
        ]);
        Article::create([
            'title'=>'What is PHP?',
            'category'=>'Hypertext processor',
            'description'=>'PHP is an acronym for "PHP: Hypertext Preprocessor", PHP is a widely-used, open source scripting language,PHP scripts are executed on the server, PHP is free to download and use.',
           'visible'=>true,
        ]);
    }
}


