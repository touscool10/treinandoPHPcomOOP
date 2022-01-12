<?php
    include_once('classes/Serie.class.php');

    $br_ba = new Serie;

    $br_ba->setNomeFilme('Breaking Bad');
    $br_ba->setTemporada('1a Temporada');
    echo $br_ba->getTemporada() ;

    
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