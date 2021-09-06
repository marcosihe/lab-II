<?php
    require_once("html/header.html");
    require_once("php/numeroNarcisista.php");
?>
    <header>
        <h1 class="headerText">Números Narcisistas<h1/>
    </header>
    <main class="main31">
        <section class="boxContainer31">
            <?php
                echo '<p>Número: <span class="boldText">' . $numeroAleatorio . '</span></p>';
                echo '<p>Cálculo: <span class="boldText">' . algoritmoDeNumeroNarcisista($numeroAleatorio, $exponente) . '</span></p><br>';
                echo '<span class="message31">' . determinarSiElNumeroEsNarcisista($numeroAleatorio, $exponente) . '</span>';
            ?>
        </section>
    </main>
<?php
    require_once("html/footer.html");
?>