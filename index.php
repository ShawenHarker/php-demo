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
    </body>
</html>