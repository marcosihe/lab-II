<?php
    function crearMapaDeBombas($bombasDisponibles, $filas, $cols) {
        $mapaDeBombas = array();
        do {
            $fila = mt_rand(0, $filas-1);
            $col = mt_rand(0, $cols-1);
            if(!in_array([$fila, $col], $mapaDeBombas))
                array_push($mapaDeBombas, [$fila, $col]);
                $bombasDisponibles--;
        } while ($bombasDisponibles > 0);
        return $mapaDeBombas;
    }

    function jugar($mapaDeBombas, $filas, $cols){
        $puntos = 0;
        do {
            $coordenadaX = mt_rand(0, $filas-1);
            $coordenadaY = mt_rand(0, $cols-1);
            $puntos++;
        } while (!in_array([$coordenadaX, $coordenadaY], $mapaDeBombas));
        return $puntos;
    }

    function cargarYMostrarMatriz($filas, $cols, $mapaDeBombas, $bomb, $caracter){
        $matriz = array();
        echo '<table class="boxContainer33">';
        for($i = 0; $i < $filas; $i++){
            echo '<tr>';
            for($j = 0; $j < $cols; $j++){
                echo '<td class="grilla">'
                . $matriz[$i][$j] = (in_array([$i,$j], $mapaDeBombas)) ? $bomb : $caracter .
                '</td>';
            }
            echo '<tr>';
        }
        echo '</table>';
        //return $matriz;
    }

    // Parámetros del juego
    $filas = 10;
    $cols = 10;
    $bombasDisponibles = 10;
    $bomb = '<span class="bomb">B</span>';
    $caracter = '-';
    $mapaDeBombas = crearMapaDeBombas($bombasDisponibles, $filas, $cols);
?>