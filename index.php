<?php

$bookName = "Rich Dad, Poor Dad";

$hasBeenRead = true;

if ($hasBeenRead) {
    $message = "I have read <span class='title'>$bookName</span>";
} else {
    $message = "I have <span class='not'>NOT</span> read <span class='title'>$bookName</span>";
}

$listOfBooks = [
    "The 4 hour work week",
    "Rich Dad, Poor Dad",
    "The Art of Computer Programming",
    "Programming logic & Design",
    "Head First PHP",
    "Head First JavaScript",
    "Clean Coder"
];

$listOfNames = [
    "Tim Berners-Lee",
    "Guido van Rossum",
    "Brendan Eich",
    "Dennis Ritchie",
];

// Associative arrays
$books = [
    [
        "title" => "Do Androids Dream of Electric Sheep",
        "author" => "Philip K. Dick",
        "purchaseUrl" => "http://www.amazon.com",
        "year" => 1968,
        "rating" => 4.4
    ],
    [
        "title" => "Rich Dad, Poor Dad",
        "author" => "Robert Kiyosaki",
        "purchaseUrl" => "http://www.takealot.com",
        "year" => 1997,
        "rating" => 4.7
    ],
    [
        "title" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchaseUrl" => "http://www.loot.co.za",
        "year" => 2021,
        "rating" => 4.7
    ]
];

$movies = [
    [
        'title' => 'The Shawshank Redemption',
        'year' => 1994,
        'director' => 'Frank Darabont',
        'rating' => 9.3
    ],
    [
        'title' => 'The Godfather',
        'year' => 1972,
        'director' => 'Francis Ford Coppola',
        'rating' => 9.2
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'director' => 'Christopher Nolan',
        'rating' => 9
    ],
    [
        'title' => 'Pulp Fiction',
        'year' => 1994,
        'director' => 'Quentin Tarantino',
        'rating' => 8
    ],
    [
        'title' => 'Fight Club',
        'year' => 1999,
        'director' => 'David Fincher',
        'rating' => 8
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'director' => 'Christopher Nolan',
        'rating' => 8
    ],
    [
        'title' => 'The Matrix',
        'year' => 1999,
        'director' => 'Lana Wachowski',
        'rating' => 8
    ],
    [
        'title' => 'The Lord of the Rings: The Return of the King',
        'year' => 2003,
        'director' => 'Peter Jackson',
        'rating' => 8
    ]
];

function filterByAuthor($books, $author)
{
    $filteredBooks = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}
;

function filterByYear($movies, $year)
{
    $filteredMovies = [];

    foreach ($movies as $movie) {
        if ($movie['year'] >= $year) {
            $filteredMovies[] = $movie;
        }
    }
    return $filteredMovies;
}
;

// Lambda functions
function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
;

$filteredBooks = filter($books, function ($book) {
    return $book['year'] >= 1950 && $book['year'] <= 2020;
});

// This is the built in lambda function of php, the above function from lines 163 to 178 is equivalent to the function below of lines 181 to 183.
$filterMovies = array_filter($movies, function ($movie) {
    return $movie['year'] < 2000;
});

require "index.view.php";