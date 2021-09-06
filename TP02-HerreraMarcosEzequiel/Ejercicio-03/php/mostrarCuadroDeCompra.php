<?php
/** Este componente hace uso del archivo 'generarCompra.php' el 
 * cual se incluye en index.php, quien a su vez contiene 
 * a este componente.
 */
    echo '
    <section class="boxContainer">
        <h2>Criptomonedas</h2>
        <hr>
        <p>Efectivo: <span class="boldText">$ ' . $saldoDisponible . '</span></p><br>
        <p>Compraste:<br><span class="blueText">' . $criptomonedasCompradas . " " . $nombreDeLaCriptomoneda . '</span></p>
    </section>';
?>