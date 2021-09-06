<?php   
    function contarCifras($numero){
        return strlen((string)$numero);
    }

    // La siguiente función entrega resultados correctos cuando recibe números no negativos para evaluar
    function algoritmoDeNumeroNarcisista($numero, $exp) {
        if($numero < 10)
            return pow($numero, $exp);
        return algoritmoDeNumeroNarcisista((int)($numero/10), $exp) + pow(($numero % 10), $exp);
    }
    
    function determinarSiElNumeroEsNarcisista($numero, $exp){
        return ($numero !== algoritmoDeNumeroNarcisista($numero, $exp)) ? 'No es un numero narcisista' : 'Número narcisista!';
    }

    $minRand = 1;
    $maxRand = 154;
    $numeroAleatorio = mt_rand($minRand, $maxRand);
    //$numeroAleatorio = 1634;
    $exponente = contarCifras($numeroAleatorio);
?>