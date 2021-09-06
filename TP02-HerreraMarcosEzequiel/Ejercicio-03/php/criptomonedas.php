<?php
    $arrayDeCriptomonedas =  [
        "BTC:Bitcoin" => 4528602.88,
        "ETH:Ethereum" => 298969.91,
        "ADA:Cardano" => 244.14,
        "DOGE:Dogecoin" => 25.95,
        "DOT:Polkadot" => 2291.50,
        "SOL:Solana" => 7193.23,
        "FIL:Filecoin" => 6885.51,
        "USDT:TheterUS" => 97.98
    ];
    
    $cantidadDeTiposDeCriptomonedas = count($arrayDeCriptomonedas);

    /** La siguiente función sirve para obtener un array de dos dimensiones donde cada
     * elemento de este array será un array de strings.
     * El primer elemento contendra las abreviaturas
     * de las criptomonedas, y el segundo elemento
     * contendrá los respectivos nombres de las
     * mismas.
     */
    function obtenerNombresDeLasCriptomonedas($array){
        $arr = [];
        $arr1 = [];
        $arr2 = [];
        foreach(array_keys($array) as $elememt){
            $auxArray = explode(":", $elememt);
            array_push($arr1, $auxArray[0]);
            array_push($arr2, $auxArray[1]);
        }
        $arr = [$arr1, $arr2];
        return $arr;
    }

    /** La siguiente función sirve para obtener los precios de cada
     * criptomoneda, los cuales se almacenarán en 
     * un arreglo.
     */
    function obtenerCotizacionDeLasCriptomonedas($array){
        $arr = [];
        foreach($array as $elememt){
            array_push($arr, $elememt);
        }
        return $arr;
    }

    $arrayDeCodigos = obtenerNombresDeLasCriptomonedas($arrayDeCriptomonedas)[0];
    $arrayDeNombres = obtenerNombresDeLasCriptomonedas($arrayDeCriptomonedas)[1];
    $arrayDeCotizaciones = obtenerCotizacionDeLasCriptomonedas($arrayDeCriptomonedas);
?>