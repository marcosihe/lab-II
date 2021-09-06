<?php
/** En este componente se trabaja haciendo uso del archivo 
 * 'criptomonedas.php' el cual se incluye 
 * en 'index.php' donde es llamado el 
 * presente componente.
*/
    echo '<section>';
    echo '<table class="criptoTable">';
    echo '<tr><th>Criptomoneda</th><th>Cotización</th></tr>';
    for ($i = 0; $i < count($arrayDeCriptomonedas); $i++) {
        echo '
        <tr>
            <td><span class="boldText">' . $arrayDeCodigos[$i] . "</span> (" . $arrayDeNombres[$i] . ')</td>
            <td>$ ' . $arrayDeCotizaciones[$i] . '</td>
        </tr>';
    }
    echo '</table>';
    echo '</section>';
?>