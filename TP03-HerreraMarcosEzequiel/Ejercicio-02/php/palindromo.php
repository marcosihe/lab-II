<?php
    function eliminarEspaciosDeUnTexto($text){
        return str_replace(' ', '', $text);
    }

    function reemplazarLetrasConTilde($text){
        $text = str_replace('á', 'a', $text);
        $text = str_replace('é', 'e', $text);
        $text = str_replace('í', 'i', $text);
        $text = str_replace('ó', 'o', $text);
        $text = str_replace('ú', 'u', $text);
        return $text;
    }

    function prepararTexto($text){
        return strtoupper(reemplazarLetrasConTilde(eliminarEspaciosDeUnTexto($text)));
    }

    function verificarSiEsPalindromo($text){
        return prepararTexto($text) === strrev(prepararTexto($text)) ? 'Es un palíndromo' : 'No es un palíndromo';
    }
?>