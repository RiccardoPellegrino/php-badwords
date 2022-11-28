<?php

$par = $_GET["par"];
$parola = $_GET["parola"];
$lunghezza = strlen($par);
$sostituire = str_replace($parola, " *** ", $par);
$nuovo = strlen($sostituire);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>BadWords</title>
</head>

<body class="bg-dark text-white container text-center">
    <div>
        <h1 class="text-success my-5">BadWords </h1>
        <h2 class="text-warning my-4">Testo originale </h2>
        <h4>
            <?php echo "$par lunghezza $lunghezza" ?>
        </h4>
        <h2 class="text-danger my-4">Testo censurato </h2>
        <h4>
            <?php echo "$sostituire" ?>
        </h4>
    </div>

</body>

</html>