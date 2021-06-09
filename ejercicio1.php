<?php
/*Hacer una función que reciba dos fechas y retorne la cantidad de días que hay entre ellas aclarando y 
“faltan” esos días o ya “pasaron”.*/
date_default_timezone_set('America/Argentina/San_Luis');
$fecha1 = "2021/05/15";
$fecha2 = "2021/06/11";


function diferenciafechas($fecha1, $fecha2)
{
    if ($fecha1 <= $fecha2) {
        $segundosxdia = 60 * 60 * 24;
        $diferencia = strtotime($fecha2) - strtotime($fecha1);
        $dias = intval($diferencia / $segundosxdia);
        echo "Faltan $dias dias para la fecha <br>";
    } else {
        $segundosxdia = 60 * 60 * 24;
        $diferencia = strtotime($fecha1) - strtotime($fecha2);
        $dias = intval($diferencia / $segundosxdia);
        echo "Pasaron $dias dias de la fecha <br>";
    }
}
echo diferenciafechas($fecha1, $fecha2);
