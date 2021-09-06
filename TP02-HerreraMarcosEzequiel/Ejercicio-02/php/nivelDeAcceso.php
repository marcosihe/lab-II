<?php
    $nivelMin = 'A';
    $nivelMax = 'C';

    function generarNivelDeAccesoAleatorio($inicio = 'A', $final = 'C'){
        $inicio = strtoupper($inicio);
        $final = strtoupper($final);
        return $nivel = chr(mt_rand(ord($inicio), ord($final)));
    }

    function nivel($letraNivel){
        $array = [];
        $array2 = ["CRUD productos", "CRUD categoría", "Informes"];
        if($letraNivel === 'A'){$array = array_merge($array, ["Listado productos", "Informes"]);}
        if($letraNivel === 'B' || $letraNivel === 'C'){$array = array_merge($array, $array2);}
        if($letraNivel === 'C'){$array = array_merge($array, ["CRUD usuarios", "Balances"]);}
        return $array;
    }

    function dibujarBloqueDeOpciones($array){
        foreach($array as $elememt){
            echo '<div class="bloqueDeOpcion"><p>' . $elememt . '</p></div><br>';
        }
    }

    echo '<section class="asideSection">';
    $arrayy = nivel(generarNivelDeAccesoAleatorio('a','c'));
    dibujarBloqueDeOpciones($arrayy);
    echo '</section>';
?>