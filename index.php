<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Php learning path</title>
    <style>
        body {
            display: grid;
            place-content: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }

        .title {
            color: blueviolet;
        }

        .not {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $bookName = "Rich Dad, Poor Dad";
    $hasBeenRead = true;

    if ($hasBeenRead) {
        $message = "I have read <span class='title'>$bookName</span>";
    } else {
        $message = "I have <span class='not'>NOT</span> read <span class='title'>$bookName</span>";
    }
    ?>
    <h1>
        <!-- This is the shorthand to <?php echo $message; ?>  -->
        <?= $message ?>
    </h1>
    <?php
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
    ?>
    <h2>Recommended books</h2>
    <ul>
        <?php foreach ($listOfBooks as $book) {
            // The code next to books is for the TM symbol, wrapping the variable with {} is a cleaner way to concatenate a string.
            echo "<li>{$book}&#153;</li>";
        } ?>
    </ul>

    <h2>Recommended Authors</h2>
    <ul>
        <!-- This example is the example of writing cleaner code for the foreach loop in php -->
        <?php foreach ($listOfNames as $name): ?>
            <li>
                <?= $name ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Associative Arrays</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                "<a href="<?= $book['purchaseUrl'] ?>" target="_blank">
                    <?= $book['title'] ?>
                </a>" by
                <?= $book['author'] ?>
                was published in <?= $book['year'] ?>
                and have a rating of <?= $book['rating'] ?> stars.
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>