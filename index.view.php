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
            margin-bottom: 50px;
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
    <h1>
        <!-- This is the shorthand to <?php echo $message; ?>  -->
        <?= $message ?>
    </h1>

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
                was published in
                <?= $book['year'] ?>
                and have a rating of
                <?= $book['rating'] ?> stars.
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- List books based on conditional statement -->
    <h2>List with function</h2>
    <ul>
        <?php foreach (filterByAuthor($books, "Robert Kiyosaki") as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>" target="_blank">
                    <?= $book['title'] ?>
                </a> by
                <?= $book['author'] ?>
                was published in
                <?= $book['year'] ?>
                and have a rating of
                <?= $book['rating'] ?> stars.
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>List movies with function</h2>
    <ul>
        <?php foreach (filterByYear($movies, 2000) as $movie): ?>
            <li>
                The movie
                <?= $movie['title'] ?> by
                <?= $movie['director'] ?>
                and was released in
                <?= $movie['year'] ?>
                and have a rating of
                <?= $movie['rating'] ?>.
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>List with lambda function</h2>
    <h3>Books</h3>
    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>" target="_blank">
                    <?= $book['title'] ?>
                </a> by
                <?= $book['author'] ?>
                was published in
                <?= $book['year'] ?>
                and have a rating of
                <?= $book['rating'] ?> stars.
            </li>
        <?php endforeach; ?>
    </ul>
    <h3>Movies</h3>
    <ul>
        <?php foreach ($filterMovies as $movie): ?>
            <li>
                The movie
                <?= $movie['title'] ?> by
                <?= $movie['director'] ?>
                and was released in
                <?= $movie['year'] ?>
                and have a rating of
                <?= $movie['rating'] ?>.
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>