<?php
    require_once("html/header.html");
    require_once("php/palindromo.php");
    require_once("php/frases.php");
?>
    <header>
        <h1 class="headerText">Palíndromos<h1/>
    </header>
    <main class="main32">
        <section class="boxContainer32">
            <?php
                echo '
                    <p>Palabra o frase: 
                        <span class="boldText">' . $fraseAleatoria . '</span>
                    </p>
                    <p class="boldText">' 
                    .  verificarSiEsPalindromo($fraseAleatoria) . 
                    '</p>';
            ?>
        </section>
    </main>
<?php
    require_once("html/footer.html");
?>