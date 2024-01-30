<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome',);
})->name('home');


Route::get('/articoli', function () {

    $articoli = [
       0=> ['titolo' => 'Articolo0', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Michele'],
       1=> ['titolo' => 'Articolo1', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Giovanni'],
       2=> ['titolo' => 'Articolo2', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Carmine'],
       3=> ['titolo' => 'Articolo3', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Giorgia'],

    ];

    return view('articoli', ['articoli' => $articoli]);
})->name('articoli');

Route::get('/articolo/{id}',function($id){
    $articoli = [
        0=> ['titolo' => 'Articolo0', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Michele'],
        1=> ['titolo' => 'Articolo1', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Giovanni'],
        2=> ['titolo' => 'Articolo2', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Carmine'],
        3=> ['titolo' => 'Articolo3', 'descrizione' => 'Questa è una descrizione', 'nome' => 'Giorgia'],
 
     ];
    return view('dettaglio',['articolo'=> $articoli[$id]]);
});


Route::get('/chiSono', function () {
    return view('chisono',);
})->name('chisono');
