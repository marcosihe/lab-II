<?php
    $minRand = 40000;
    $maxRand = 60000;
    $nombreCompletoDelEmpleado = 'Marcos Ezequiel Herrera';
    const APORTE_JUBILATORIO = 13; // 13% a descontar
    const OBRA_SOCIAL = 3.5;       //3.5%  a descontar
    const TITULO = 10;             // 10% a sumar al sueldo bruto inicial
    $sueldoBrutoInicial = mt_rand($minRand, $maxRand);
    $adicionalPorTitulo = $sueldoBrutoInicial * TITULO / 100;
    $sueldoBruto = $sueldoBrutoInicial + $adicionalPorTitulo;

    $descPorAporteJubilatorio = -($sueldoBruto * APORTE_JUBILATORIO / 100);
    $descPorObraSocial = -($sueldoBruto * OBRA_SOCIAL / 100);
    /* Se toman valores negativo a sumar al cálculo total del sueldo neto */

    $sueldoNeto = $sueldoBruto + $descPorAporteJubilatorio + $descPorObraSocial ;
    $sueldoNeto_format_2_decimales = number_format($sueldoNeto,2);

    echo '
    <section class="reciboDeSueldo">
        <h1>RECIBO DE SUELDO</h1>
        <table>
            <caption>
                <h4 class="ticketTitle">Empleado/a: ' . $nombreCompletoDelEmpleado . '</h4>
            </caption>
            <tr>
                <th>Conceptos</th>
                <th>Ingresos</th>
                <th>Descuentos</th>
            </tr>
            <tr>
                <td>Sueldo Bruto</td>
                <td class="flexEndText">$' . number_format($sueldoBruto,2) . '</td>
                <td></td>
            </tr>
            <tr>
                <td>Título</td>
                <td>$' . number_format($adicionalPorTitulo,2) . '</td>
                <td class="flexEndText"></td>
            </tr>
            <tr>
                <td>Aporte Jubilatorio</td>
                <td></td>
                <td class="flexEndText">$' . number_format(-$descPorAporteJubilatorio,2) . ' </td>
            </tr>
            <tr>
                <td>Obra Social</td>
                <td></td>
                <td class="flexEndText">$' . number_format(-$descPorObraSocial,2) . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="flexEndText">Sueldo Neto: $' . $sueldoNeto_format_2_decimales . '</td>
            <tr/>
        </table>

    </section>';
?>