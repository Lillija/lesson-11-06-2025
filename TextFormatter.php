<?php

// We make a "TextFormatter" class — this is like a little machine that changes text step-by-step
class TextFormatter{
    // This is where the machine keeps the text inside it
    protected $text;

    // This runs when we create a new machine and give it some starting text
    public function __construct($text){
        $this->text = $text;  // Save the starting text inside the machine
    }

    // This button makes all letters BIG (uppercase)
    public function toUpperCase(){
        // Change text to uppercase, also works with special letters like Latvian ones
        $this->text = mb_strtoupper($this->text, 'UTF-8');
        return $this;  // Return the same machine so we can press more buttons after
    }

    // This button takes out all spaces from the text
    public function removeSpaces(){
        // Remove spaces by replacing " " with nothing ""
        $this->text = str_replace(' ', '', $this->text);
        return $this;  // Return the same machine for more button presses
    }

    // This button adds more text at the end of current text
    public function append($string){
        $this->text .= $string;  // Add the new string to the end of current text
        return $this;  // Return the machine again to keep chaining
    }

    // This button shows us the final changed text
    public function getFormattedText(){
        return $this->text;  // Give back the current text inside the machine
    }
    
}

// Now, we make a new machine and give it some starting words
$formatter1 = new TextFormatter("Es gribu mājās :(");

// We press the buttons in this order:
// 1. Make letters uppercase
// 2. Remove all spaces
// 3. Add nothing at the end (empty string)
// 4. Get the final text and save it in $result1
$result1 = $formatter1
            ->toUpperCase()     
            ->removeSpaces()
            ->append("")           
            ->getFormattedText();

// Show the final result on screen
echo "Result 1: " . $result1 . "\n";

