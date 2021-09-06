<?php
/** En este componente se trabaja haciendo uso del archivo 
 * 'criptomonedas.php' el cual se incluye 
 * en 'index.php'
*/
    const SALDO_MIN = 10000;
    const SALDO_MAX = 50000;
    $maxRand = $cantidadDeTiposDeCriptomonedas - 1;
    function generarSaldoDisponible($min = SALDO_MIN, $max = SALDO_MAX){
        return mt_rand($min, $max);
    }

    function seleccionarCriptomoneda($arrayDeCodigos, $arrayDeNombres, $arrayDeCotizaciones, $maxRand){
        $arr = [];
        $randomNumber = mt_rand(0, $maxRand);
        array_push($arr, $arrayDeCodigos[$randomNumber]);
        array_push($arr, $arrayDeNombres[$randomNumber]);
        array_push($arr, $arrayDeCotizaciones[$randomNumber]);
        return $arr;
    }

    function comprarCriptomonedas($saldo, $valorDeLaCripto){
        return number_format($saldo/$valorDeLaCripto,8);
    }

    $saldoDisponible = generarSaldoDisponible();
    $criptoMonedaSeleccionada = seleccionarCriptomoneda($arrayDeCodigos, $arrayDeNombres, $arrayDeCotizaciones, $maxRand); // 0 -> código, 1 -> nombre, 2 -> cotización
    $criptomonedasCompradas = comprarCriptomonedas($saldoDisponible, $criptoMonedaSeleccionada[2]);
    $nombreDeLaCriptomoneda = $criptoMonedaSeleccionada[1];
?>