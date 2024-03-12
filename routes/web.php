<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function(){
    return view('contatti',[
        'title'=>'Tutti i contatti li trovati qui :'
    ]);

});

Route::get('/chisono', function(){
    return view('chi-sono',[
        'chiSono'=>'About Us',
        'discrizione'=>'Siamo Hackademy - 27, e questo sara il primo nostro primo progetto di Laravel'
    ]);

});