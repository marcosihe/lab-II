<?php
    function crearFila($cols, $caracter){
        $fila = array();
        for($index = 0; $index < $cols; $index++)
            $fila[$index] = $caracter;
        return $fila;
    }

    function cargarMatriz($filas, $cols, $caracter){
        $matriz = array();
        for($index = 0; $index < $filas; $index++){
            $matriz[$index] = crearFila($cols, $caracter);
        }
        return $matriz;
    }

    function colocarBombas($matriz, $bomb, $bombasDisponibles, $caracter){
        $filas = count($matriz);
        $cols = count($matriz[0]);
        do {
            $fila = mt_rand(0, $filas-1);
            $col = mt_rand(0, $cols-1);
            if ($matriz[$fila][$col] === $caracter) {
                $matriz[$fila][$col] = $bomb;
                $bombasDisponibles--;
            }
        } while ($bombasDisponibles > 0);
        return $matriz;
    }

    function dibujarMatriz($matriz){
        $filas = count($matriz);
        $cols = count($matriz[0]);

        echo '<table class="boxContainer33">';
        for($i = 0; $i < $filas; $i++){
            echo '<tr>';
            for($j = 0; $j < $cols; $j++){
                echo '<td class="grilla">' . $matriz[$i][$j] . '</td>';
            }
            echo '<tr>';
        }
        echo '</table>';
    }

    function jugar($matriz, $bomb){
        $filas = count($matriz);
        $cols = count($matriz[0]);
        $puntos = 0;
        do {
            $fila = mt_rand(0, $filas-1);
            $col = mt_rand(0, $cols-1);
            $puntos++;
        } while ($matriz[$fila][$col] !== $bomb);
        return $puntos;
    }

    // Definir los parámetros del juego
    $filas = 10;
    $cols = 10;
    $bombasDisponibles = 10;
    $bomb = '<span class="bomb">B</span>';
    $caracter = '-';

    // Crear matriz
    $matrizSinBombas = cargarMatriz($filas, $cols, $caracter);

    // Colocar bombas en la matriz
    $matrizConBombas = colocarBombas($matrizSinBombas, $bomb, $bombasDisponibles, $caracter);
?>