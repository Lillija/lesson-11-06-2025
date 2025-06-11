<?php
// 1. First, we need to include three important files that have functions we need to use.
require 'views.php';   // Lets us show the pages on the screen.
require 'Router.php';  // Helps manage what happens when someone visits different URLs.
require 'TextFormatter.php';  // Lets us change the text in special ways (like making it uppercase or removing spaces).

// 2. This is a "GET" route. It shows the "home" page when someone visits the /home URL.
Router::get('/home', function () {
    // When the user visits "/home", we send some data (the name and email) to the home page.
    view('home', [
        'name' => 'I wanna go home',  // The name we want to show on the home page.
        'email' => 'Iwanna@gohome.pls'  // The email we want to show on the home page.
    ]);
});

// 3. This is a "POST" route. It handles what happens when someone submits a form.
Router::post('/submit', function () {
    // This is the "submit" page. We send no data because we just want to show the page.
    view('submit', []);  // Empty data means no extra info.
});

// 4. This tells the Router to start listening for requests. It looks at the URL and runs the correct function.
Router::dispatch();

// 5. Another "GET" route for "/home" with text formatting.
Router::get('/home', function(){
    // We start with the text "Es gribu mājās :(" and create a TextFormatter object.
    $formatter = new TextFormatter("Es gribu mājās :(");
    
    // We do a few steps to change the text:
    $formatted = $formatter->toUpperCase()     // Step 1: Convert text to uppercase.
                           ->removeSpaces()   // Step 2: Remove all spaces from the text.
                           ->append("!")      // Step 3: Add an exclamation mark at the end.
                           ->getFormattedText();  // Step 4: Get the final version of the text.
    
    // Now we show the "home" page again, but with the new, formatted name.
    view('home', [
        'name' => $formatted,  // The new, formatted name to display.
        'email' => 'Iwanna@gohome.pls'  // The email stays the same.
    ]);
});



