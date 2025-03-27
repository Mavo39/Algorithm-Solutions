<?php

class Book{
    public static string $author = "Stephen Hawkings";
    public string $title;
    public string $year;

    public function __construct(string $title, string $year){
        $this->title = $title;
        $this->year = $year;
    }
}

function printBookArray(array $books): void{
    for($i = 0; $i < count($books); $i++){
        echo "{$books[$i]->title} written by {Book::\$author} in {$books[$i]->year}" . PHP_EOL;
    }
}