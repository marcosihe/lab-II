<?php
    const MIN = 1;
    const MAX = 12;

    function sortearCarta($min = MIN, $max = MAX){
        return mt_rand($min, $max);
    }

    function determinarValor($cartaSorteada){
        return $valor = $cartaSorteada < 10 ? $cartaSorteada : 0.5;
    }

    function asignarNombre($cartaSorteada){
        $name = '';
        $name .= $cartaSorteada === 10 ? 'Sota' : '';
        $name .= $cartaSorteada === 11 ? 'Caballo' : '';
        $name .= $cartaSorteada === 12 ? 'Rey' : '';
        return $name;
    }

    function mostrarCarta($cartaSorteada){
        return $carta = asignarNombre($cartaSorteada) === '' ? $cartaSorteada : asignarNombre($cartaSorteada);
    }
    
    /** La función 'declararResultado() debe recibir como parámetros los valores sorteados
     * aleatoriamente previamente PROCESADOS por la función 'determinarValor()'
     */

    function declararResultado($primerValor, $segundoValor){
        return $resultado = ($primerValor + $segundoValor) === 9.5 ? 'GANADOR' : 'PUNTOS OBTENIDOS: ' . ($primerValor + $segundoValor);
    }

    // JUGAR
    $primerCarta = sortearCarta();
    $segundaCarta = sortearCarta();
    $primerValor = determinarValor($primerCarta);
    $segundoValor = determinarValor($segundaCarta);
    $resultado = declararResultado($primerValor, $segundoValor);

    // Mostrar resultados
    echo '
    <main class="main21">
        <section class="mainSection">
            <h1 class="mainTitle">9 Y MEDIO</h1>
            <div>
                <hr>
                <p>Naipe 1: ' . mostrarCarta($primerCarta) . '</p>
                <p>Naipe 2: ' . mostrarCarta($segundaCarta) . '</p>
                <p class="boldText">' . $resultado . '</p>
            </div>
        </section>
    </main>';
?>