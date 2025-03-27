<?php

require_once './solution.php';

$books = [];
array_push($books, new Book("How Did It All Begin?", "2021"));
array_push($books, new Book("The Theory of Everything", "2010"));
array_push($books, new Book("God Created the Integers", "2006"));

printBookArray($books);