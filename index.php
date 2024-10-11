<?php

class Movie {

    private $title;         //string
    public $director;      //string
    public $genre;         //array-string
    private $year;         //string
    public $actor;         //array
    public $language;      //array-string

    function __construct($title, $director, $genre, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;

    }

    public function getTitle() {
        return $this->title;

    }

    public function setTitle($title) {
        if (is_string($title) && strlen($title) > 0 ) {
            $this->title = $title;
        }
        else {
            'error';
        }
    }

    public function getYear() {
        return $this->year;

    }

    public function setYear($year) {
        if (is_numeric($year)) {
            $this->year = $year;
        }
        else {
            'error';
        }
    }
};


$director = 'Francesco Vicario';
$genre = [
    'comedy',
    'drama',
    'romantic'
];

$cesaroni = new Movie('i cesaroni', $director, $genre, 2006);

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