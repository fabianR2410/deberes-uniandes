<?php
//variables

$cadena1 = "hola<br>";
$cadena2 = "mundo";

//concatnar
$cadena_concatenada = $cadena1 . $cadena2;
echo $cadena_concatenada; //print cadena concatenada


// longitud de la cadena
$longitud = strlen($cadena_concatenada);
echo "<br>La longitud de la cadena es: " . $longitud;
?>