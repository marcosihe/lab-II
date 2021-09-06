<?php
    require_once("php/generarPatente.php");
    require_once("html/header.html");
    echo
        '<main class="mainDelRegistro">
            <section class="patenteContainer">
                <h1>Registro Automotor de la Provincia de Tucumán</h1>
                <h4>Patente generada:</h4>
                <p> ' . $patente .  ' </p>
            </section>
        </main>';
    require_once("html/footer.html");
?>

<!-- La variable $patente proviene del archivo incluido: generarPatente.php -->