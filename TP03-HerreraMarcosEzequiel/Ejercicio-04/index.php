<?php
    require_once("html/header.html");
    require_once("php/recaudacion.php");
?>
    <header>
        <h1 class="headerText">Estacionamiento<h1/>
    </header>
    <main class="main34">
        <section class="boxContainer34">
            <h1 class="estacionamientoTitle">Recaudación Estacionamiento</h1>
            <?php
                simularRecaudacionDiaria($tarifas, $estadiaPromedio);
            ?>
        </section>
    </main>
<?php
    require_once("html/footer.html");
?>