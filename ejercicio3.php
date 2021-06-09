<?php
//Capital x (tasa de interés x el plazo / 365)= INTERESES GANADOS
date_default_timezone_set('America/Argentina/San_Luis');
$interes = 28 / 100;
$plazo = 30;
$capital = 10000;
function plazofijo($capital, $interes, $plazo)
{
    $hoy = time();
    $segundosxdia = 60 * 60 * 24;
    $diaUnix = $plazo * $segundosxdia;
    $fechavencimiento = $hoy + $diaUnix;
    $fvenc = date("d-m-Y", $fechavencimiento);
    $interesganado = $capital * ($interes * $plazo / 365);
    $montototal = intval($interesganado + $capital);
    $nfvenc = date("w", $fechavencimiento); //numero de semana que termine la fecha de vencimiento 0D,1L,2M,3M,4J,5V,6S
    if ($nfvenc == 0) {
        $nfvenc = $fechavencimiento + $segundosxdia;
        $fecha = date("d-m-Y", $nfvenc);
        $arreglo = array(
            'capital' => "$montototal",
            'interes' => "$interes",
            'fecha_vencimiento' => "$fecha"
        );
        return print_r($arreglo);
    } elseif ($nfvenc == 6) {
        $nfvenc = $fechavencimiento + 2 * $segundosxdia;
        $fecha = date("d-m-Y", $nfvenc);
        $arreglo = array(
            'capital' => "$montototal",
            'interes' => "$interes",
            'fecha_vencimiento' => "$fecha"
        );
        return print_r($arreglo);
    } else {
        $arreglo = array(
            'capital' => "$montototal",
            'interes' => "$interes",
            'fecha_vencimiento' => "$fvenc"
        );
        return print_r($arreglo);
    }
}
echo plazofijo($capital, $interes, $plazo);
