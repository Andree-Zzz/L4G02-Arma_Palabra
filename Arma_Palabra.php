<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arma_Palabra</title>
</head>
<body>
<h2>Encuentra</h2>
<?php
    $palabra=["computadora","cam,compu,perr,lola,tadora,pas"];
    $expres=explode(",",$palabra[1]);
    echo "<h4>( ".$palabra[0]." )</h4>";
    $valor="sin_concidencia";

    for($i=0;$i<count($expres);$i++){
        echo $expres[$i]." | ";
        for($s=0;$s<count($expres);$s++){
            if($expres[$i].$expres[$s]==$palabra[0]){
                $valor=$palabra[0];
            }
        }
    }
    echo "<br><h4>".$valor."</h4>";
    ?>
</body>
</html>
