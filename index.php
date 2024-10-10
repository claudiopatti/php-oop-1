<?php

class Movie {

    public $title;         //string
    public $director;      //string
    public $genre;         //array-string
    public $actor;         //array
    public $language;      //array-string

    function __construct($title, $director, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;

    }
}


$director = 'Francesco Vicario';
$genre = [
    'comedy',
    'drama',
    'romantic'
];

$cesaroni = new Movie('i cesaroni', $director, $genre);

var_dump($cesaroni);

















?>




















<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
    </head>
    <body>
        
    </body>
</html>