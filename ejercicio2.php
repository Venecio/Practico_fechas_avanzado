<?php
/*Hacer una función que reciba una fecha y un número n (puede ser negativo). La función deberá calcular la nueva 
fecha. Corresponderá a una fecha posterior si n es positivo, y a una fecha anterior si es negativo.*/

date_default_timezone_set('America/Argentina/San_Luis');
$fecha = "2021/05/15";
$numero = -5;


function diferenciafechas($fecha, $numero)
{
    $segundosxdia = 60 * 60 * 24;
    $diaUnix = $numero * $segundosxdia;
    $total = strtotime($fecha) + $diaUnix;
    if ($numero >= 0) {
        echo "$fecha + " . "(" . $numero . ")" . " dias es = " . date("Y-m-d", $total);
    } else {
        echo "$fecha " . $numero . " dias es = " . date("Y-m-d", $total);
    }
}
echo diferenciafechas($fecha, $numero);
