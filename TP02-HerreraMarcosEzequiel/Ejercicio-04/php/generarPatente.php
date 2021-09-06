<?php
    const LETRAS_INICIALES = 'AE';
    $minRand = 1;
    $maxRand = 999;

    function generarTresCifras($min = 1, $max = 999) {
        return substr(('00' . mt_rand($min, $max)), -3);
    }

    function generarLetras($cantidadDeLetras = 2) {
        return substr(str_shuffle('FGHIJKLMNOPQRSTUVWXYZ'), -$cantidadDeLetras);
    }

    function generarPatenteArgentina($paramA, $paramB, $paramC){
        return $paramA . ' ' . $paramB . ' ' . $paramC;
    }

    $patente = generarPatenteArgentina(LETRAS_INICIALES, generarTresCifras($minRand, $maxRand), generarLetras(2));
?>