<?php
date_default_timezone_set('America/Argentina/San_Luis');
$dinerototal = 5000;

function cuantoqueda($dinerototal)
{
    $hoy = time();
    $anio = date('Y');
    $meshoy= date('m');
    $diahoy = date('j', $hoy);
    $ult_diadelmes = cal_days_in_month(CAL_GREGORIAN, $meshoy, $anio);
    $resultado = $ult_diadelmes - $diahoy;
    $total =  ceil($dinerototal / $resultado);
    return "Podes gastar $".$total." por dìa";
}
echo cuantoqueda($dinerototal);
