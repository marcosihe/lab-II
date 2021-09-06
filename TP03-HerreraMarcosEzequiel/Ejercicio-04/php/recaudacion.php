<?php
    const PRECIO_MOTO = 50;
    const PRECIO_AUTO = 90;
    const PRECIO_CAMIONETA = 110;
    $estadiaPromedio = 2; // valor en horas

    $tarifas = [
        'motos' => PRECIO_MOTO,
        'autos' => PRECIO_AUTO,
        'camionetas' => PRECIO_CAMIONETA
    ];

    function dibujarSeparador($max = 60){
        echo '<div class="separatorColor">';
        for($i = 0; $i < $max ; $i++)
            echo ':';
        echo '</div>';
    }


    function simularRecaudacionDiaria($tarifas, $estadiaPromedio){
        $recaudacionTotal = 0;
        $cantidadDeVehiculos = 0;
        dibujarSeparador();
        echo '<ul>';
        foreach ($tarifas as $clave => $valor) {
            $cantidad = mt_rand(150,300);
            $recaudacion = $valor*$cantidad*$estadiaPromedio;
            $cantidadDeVehiculos += $cantidad;
            $recaudacionTotal += $recaudacion;
            echo '<li class="listaDeVehiculos">
                    Cantidad de: ' 
                    . $clave . ': '. $cantidad . 
                    '. Recaudación: ' 
                    . number_format($recaudacion,2) . 
                '</li>';
        }
        echo '</ul>';
        dibujarSeparador();
        echo '<div class="ticketFooterContainer">
                <p class="ticketFooter">Toal de vehículos: ' . $cantidadDeVehiculos . '</p>' .
                '<p class="ticketFooter">Recaudación del día: ' .  number_format($recaudacionTotal,2) . 
                '</p>
            </div>';
    }

?>