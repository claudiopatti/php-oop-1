<?php

class Movie {

    private $title;         //string
    public $director;      //string
    public $genre;         //array-string
    private $year;         //string
    public $actor;         //array
    public $language;      //array-string

    function __construct($title, $director, $genre, $year) {
        $this->setTitle($title);
        $this->director = $director;
        $this->genre = $genre;
        $this->setYear($year);

    }

    public function getTitle() {
        return $this->title;

    }

    public function setTitle($title) {
        if (is_string($title) && strlen($title) > 0 ) {
            $this->title = $title;
        }
        else {
            echo 'errore nel titolo';
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
             echo "errore nell' anno";
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

$genre = [
    'comedy',
    'baby',
    'romantic'
];

$cars = new Movie('cars', 'John Lasseter', $genre, 2008);


var_dump($cesaroni);
var_dump($cars);

















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