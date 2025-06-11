<?php
require 'views.php';   
require 'Router.php';  
require 'TextFormatter.php';

Router::get('/home', function () {
    view('home', [
        'name' => 'I wanna go home',
        'email' => 'Iwanna@gohome.pls'
    ]);
});

Router::post('/submit', function () {
    view('submit', []);
});

Router::dispatch();

Router::get('/home', function(){
    $formatter = new TextFormatter("Es gribu mājās :(");
    $formatted = $formatter->toUpperCase()->removeSpaces()->append("!")->getFormattedText();

    view('home',[
        'name' => $formatted,
        'email' => 'Iwanna@gohome.pls'
    ]);
});

