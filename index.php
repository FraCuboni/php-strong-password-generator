<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php


?>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="container-fluid d-flex flex-column justify-content-around h-50">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-center">
                <h1>strong password generator</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">

                <div class="card">
                    <div class="card-body">

                        <form action="landing.php" method="get">


                            <div class="input-group">

                                <input name="password_lenght" type="text" class="form-control" placeholder="Lunghezza della password">
                                <button class="btn btn-outline-secondary" type="sumbit" id="button-addon2">Button</button>

                            </div>



                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>