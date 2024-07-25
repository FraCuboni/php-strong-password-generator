<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $password_lenght = $_GET['password_lenght'];

    echo $password_lenght;

    $alphabet = range('a', 'z');
    foreach ($alphabet as $character) {
        echo $character;
    }
    $alphabet_big = range('A', 'Z');
    foreach ($alphabet_big as $character) {
        echo $character;
    }
    $numbers = range('0', '9');
    foreach ($numbers as $character) {
        echo $character;
    }

    ?>
</body>

</html>