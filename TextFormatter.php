<?php

class TextFormatter{
    protected $text;

    public function __construct($text){
        $this->text = $text;
    }

    public function toUpperCase(){
        $this->text = mb_strtoupper($this->text, 'UTF-8');
        return $this;
    }

    public function removeSpaces(){
        $this->text = str_replace(' ', '', $this->text);
        return $this;
    }

    public function append($string){
        $this->text .= $string;
        return $this;
    }

    public function getFormattedText(){
        return $this->text;
    }
    
}
$formatter1 = new TextFormatter("Es gribu mājās :(");
$result1 = $formatter1
            ->toUpperCase()     
            ->removeSpaces()
            ->append("")           
            ->getFormattedText();
echo "Result 1: " . $result1 . "\n";
