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
    }
    $alphabet_big = range('A', 'Z');
    foreach ($alphabet_big as $character) {
    }
    $numbers = range('0', '9');
    foreach ($numbers as $character) {
    }
    $special_characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '\\', '|', ';', ':', '\'', '"', ',', '<', '.', '>', '/', '?', '`', '~'];
    foreach ($special_characters as $character) {
    }

    $all_characters[] = $alphabet;
    $all_characters[] = $alphabet_big;
    $all_characters[] = $numbers;
    $all_characters[] = $special_characters;

    $password = [];

    // stampo 12 valori
    for ($i = 1; $i <= $password_lenght; $i++) {

        // seleziono uno tra i 4 array
        $array_choser = rand(0, count($all_characters) - 1);

        // ottengo un singolo carattere
        $single_character = $all_characters[$array_choser][rand(0, count($all_characters[$array_choser]) - 1)];


        // creo funzioneper non duplicare i caratteri già utilizzati
        if (!in_array($single_character, $password)) {
            $password[] = $single_character;
        } else {
            echo '<br>';
            echo 'doppione!' . $single_character;
            echo '<br>';
        };

        if ($i <= $password_lenght) {
            foreach ($password as $character_output) {
                echo $character_output;
            }
        };
    }
    ?>
</body>

</html>