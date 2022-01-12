<?php
    include_once('classes/Pessoa.class.php');

    $andre = new Pessoa("André");
    $andre->Altura = 1.75;
    $andre->Fumante = true;
    //$andre->Nome = "Setonde";
    echo $andre->Altura . "<br>". "<br>";
    echo $andre->Fumante . "<br>". "<br>";
    echo $andre->Nome . "<br>". "<br>";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Documento sem título</title>
    </head>

    <body>
    </body>
</html>