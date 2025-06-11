<?php
require 'views.php';   
require 'Router.php';  

Router::get('/home', function () {
    view('home', [
        'name' => 'Jānis',
        'email' => 'janis@piemers.lv'
    ]);
});

Router::post('/submit', function () {
    view('submit', []);
});

Router::dispatch();

