<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>




<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container-fluid d-flex flex-column justify-content-around h-50">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">

                <div class="card">
                    <div class="card-body text-center">

                        <h1>

                            <?php

                            $password_lenght = $_GET['password_lenght'];


                            $alphabet = range('a', 'z');
                            $alphabet_big = range('A', 'Z');
                            $numbers = range('0', '9');
                            $special_characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '?', '`', '~'];

                            $all_characters = array_merge($alphabet, $alphabet_big, $numbers, $special_characters);

                            $password = [];

                            // stampo 12 valori
                            for ($i = 1; $i <= $password_lenght; $i++) {

                                // ottengo un singolo carattere
                                $single_character = $all_characters[rand(0, count($all_characters) - 1)];

                                echo $single_character;


                                // // creo funzioneper non duplicare i caratteri già utilizzati
                                // if (!in_array($single_character, $password)) {
                                //     $password[] = $single_character;
                                // } else {
                                //     echo '<br>';
                                //     echo 'doppione!' . $single_character;
                                //     echo '<br>';
                                // };

                                // if ($i <= $password_lenght) {
                                //     foreach ($password as $character_output) {
                                //         echo $character_output;
                                //     }
                                // };
                            }
                            ?>
                        </h1>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>


</html>