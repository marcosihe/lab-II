<?php
    $minRand = 100;
    $maxRand = 300;
    $cantidadDeDolaresAComprar = mt_rand($minRand * 100, $maxRand * 100) / 100;
    const IMPUESTO_PAIS = 30;
    const IMPUESTO_GANANCIAS = 35;
    $cotizacionOficialDelDolar = number_format(102.5,2);
    $subTotal = $cantidadDeDolaresAComprar*$cotizacionOficialDelDolar;
    $extraPorImpuestoPais = $subTotal*IMPUESTO_PAIS/100;
    $percepcionDeGanancias = $subTotal*IMPUESTO_GANANCIAS/100;
    $totalConImpuestos = $subTotal+$extraPorImpuestoPais+$percepcionDeGanancias;
    
    $subTotal_format = number_format($subTotal,2);
    $extraPorImpuestoPais_format = number_format($extraPorImpuestoPais,2);
    $percepcionDeGanancias_format = number_format($percepcionDeGanancias,2);
    $totalConImpuestos_format = number_format($totalConImpuestos,2);

    echo '
    <section class="ticketDeCompraDeDolar">
        <p>Estas comprando: <span class="boldText">U$D ' . $cantidadDeDolaresAComprar . '</span></p>
        <p>Cotización del dolar: $' . $cotizacionOficialDelDolar .'</p>
        <p>Subtotal: $' . $subTotal_format . '</p>
        <p>Impuesto PAIS: $' . $extraPorImpuestoPais_format . '</p>
        <p>Percepción Ganancias: $' . $percepcionDeGanancias_format . '</p>
        <p class="boldText">Total (con impuestos): $' . $totalConImpuestos_format . '</p>
    </section>';
?>