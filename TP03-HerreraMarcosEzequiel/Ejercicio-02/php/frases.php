<?php
    $frasesPalindromos = array(
        'Somos o no somos',
        'Isaac no ronca así',
        'Sé verlas al reves',
        'Amó la paloma',
        'Anita lava la tina',
        'Yo hago yoga hoy',
        'Ana lava lana',
        'Radar'
    );

    $frasesNoPalindromos = array(
        'El árbol da sombra',
        'Javascript es más popular',
        'La ventana se cerró con el viento',
        'Viajar te cura el nacionalismo',
        'Amo la lógica',
        'Pomodoro rules'
    );

    $arrayDeFrases = array($frasesPalindromos, $frasesNoPalindromos);
    $minRand = 0;
    $maxRand = 1; // 1 = n-1 (donde n es la cantidad de sub-arrays que contiene la matriz arrayDeFrases)
    $primerIndice = generarIndiceAleatorio($minRand, $maxRand);
    $segundoIndice = generarIndiceAleatorio($minRand, count($arrayDeFrases[$primerIndice])-1);
    
    function generarIndiceAleatorio($min, $max) {
        return mt_rand($min, $max);
    }

    function generarFraseAleatoria($arrayDeFrases, $primerIndice, $segundoIndice){
        return $arrayDeFrases[$primerIndice][$segundoIndice];
    }

    $fraseAleatoria = generarFraseAleatoria($arrayDeFrases, $primerIndice, $segundoIndice);
?>