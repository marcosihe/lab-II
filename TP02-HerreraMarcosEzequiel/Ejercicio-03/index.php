<?php
include_once("php/criptomonedas.php");
include_once("php/generarCompra.php");
require_once("html/header.html");
    echo 
        '<header>
            <h1>Compras de Criptomonedas</h1>
        </header>
        <main class="mainContainer">';
           require_once("php/listaDeCriptomonedas.php");
           require_once("php/mostrarCuadroDeCompra.php");
     echo '</main>';
require_once("html/footer.html");
?>