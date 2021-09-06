<?php
    require_once("html/header.html");
    //require_once("php/buscaminasV1.php");
    require_once("php/buscaminasV2.php");
?>
<header>
    <h1 class="headerText">Buscaminas<h1/>
</header>
<main class="main33">
    <section class="gameContainer">
        <h1 class="buscaminasTitle">Buscaminas</h1>
        <?php
            //dibujarMatriz($matrizConBombas); //buscaminasV1.php
            cargarYMostrarMatriz($filas, $cols, $mapaDeBombas, $bomb, $caracter);
        ?>
        <section class="pointsContainer">
            <?php
                //echo '<p>Puntos: ' . jugar($matrizConBombas, $bomb) . '</p>'; // buscaminasV1.php
                echo '<p>Puntos: ' . jugar($mapaDeBombas, $filas, $cols) . '</p>';
            ?>
        </section>
    </section>
</main>
<?php
    require_once("html/footer.html");
?>