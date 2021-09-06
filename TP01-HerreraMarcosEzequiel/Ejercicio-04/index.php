<?php
    require_once("html/header.html");
?>
<main>
<?php
    define('IVA', 0.21);
    const DESCUENTO = 0.15;
    $minRand = 10;
    $maxrand = 1000;
    $primerProducto = mt_rand($minRand * 10, $maxrand * 10) / 10;
    $segundoProducto = mt_rand($minRand * 10, $maxrand * 10) / 10;
    $totalSinIva = $primerProducto + $segundoProducto;
    $totalConIva = $totalSinIva + $totalSinIva * IVA;
    $totalConDescuento = $totalConIva - ($totalConIva * DESCUENTO);
    
    echo '<section class="ticketDeCompra">';
    echo '<p>----------   SIMULACIÓN DE COMPRAS   ----------</p>';
    echo '<p>Valor de IVA 21% </br>';
    echo 'Valor de DESCUENTO: ' . DESCUENTO * 100 . '%</p>';

    
    echo '<p> Valor del primer producto sin IVA: $' . $primerProducto . '<br>';
    echo 'Valor del segundo producto sin IVA: $' . $segundoProducto . '</p><br>';

    echo '<p> Total sin IVA: $' . number_format($totalSinIva, 1, ',', '.') . '<br>';
    echo 'Total aplicando IVA: $' . NUMBER_FORMAT($totalConIva, 1, ',') . '</P>';

    echo '<p>Total aplicando Descuento del ' . DESCUENTO * 100 . '%: $';
    echo number_format($totalConDescuento, 1, ',', '.') . '</p>';
    echo '</section>';
?>
</main>
<?php
    require_once("html/footer.html");
?>