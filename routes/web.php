<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome21',[
    'welcome'=> "A new project is to be built here. <br> to be continued ....",
]);
/*Qua e stata renominata la Route da welcome in welcome21*/

})->name('welcome21');  


Route::get('/contatti', function () {
 
    return view('pages.contacts');

})->name('contacts');

Route::get('/chi-sono', function () {

   
    return view('pages.aboutMe', [
        'title' => "My name is Romeo",
        'description' => "I am from Republic of Moldova. <br> I'm Hackademy Part-Time IT 27 student.",
    ]);

})->name('aboutMe');


Route::get('/articoli', function () {

    $articles = [
        ['title' => "What is HTML? ",],
        ['title' => 'What is JavaScript?'],
        ['title' => 'What is PHP?'],
       
    ];


    return view('pages.articles', ['articles' => $articles]);

})->name('articles');


Route::get('/articolo/{article?}', function ($article) {

    $index = $article;

    $articles = [
        ['title' => " What is HTML? ", 'description' => "Hypertext: text (often with embeds such as images, too) that is organized in order  to connect related items <br> Markup: a style guide for typesetting anything to be printed in hardcopy or soft copy format
        
        Language:<br> a language that a computer system understands and uses to interpret commands.
        
        HTML determines the structure of web pages.<br> This structure alone is not enough to make a web page look good and interactive.<br> So you'll use assisted technologies such as CSS and JavaScript to make your HTML beautiful and add interactivity, respectively."],

        ['title' => 'What is JavaScript?', 'description' => 'JavaScript is a scripting or programming language that allows you to implement complex features on web pages — <br> every time a web page does more than just sit there and display static information for you to look at — <br> displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — <br> you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies,<br> two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area.'],

        ['title' => 'What is PHP?', 'description' => 'PHP is an acronym for "PHP: Hypertext Preprocessor"; <br>
        PHP is a widely-used, open source scripting language <br>
        PHP scripts are executed on the server <br>
        PHP is free to download and use'],
      
    ];

    if(array_key_exists($index, $articles)) {

        return view('pages.article', ['article' => $articles[$index]]);

    } else {

        abort(404);
    
    }  


})->name('article');