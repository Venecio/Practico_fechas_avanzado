<?php
date_default_timezone_set('America/Argentina/San_Luis');
$dinerototal = 5000;

function cuantoqueda($dinerototal)
{
    $hoy = time();
    $ult_diadelmes = date('t', $hoy);
    $diahoy = date('j', $hoy);
    $resultado = $ult_diadelmes - $diahoy;
    $total = intval($dinerototal / $resultado);
    echo $total;
}
echo cuantoqueda($dinerototal);
