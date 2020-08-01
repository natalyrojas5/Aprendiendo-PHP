<?php
    /* FORMAS DE CREAR UN ARRAY */
    $numeros = [];
    $numeros = array();

    /* ARREGLO INDEXADO -----------------*/
    $letras= ['A', 'B', 'C', 'D'];

    /* Accede por indice */
    echo $letras[0];

    /* ARREGLO ASOCIATIVOS -----------------*/
    /* CLAVE - LLAVE - VALOR */
    $lenguajes = ["lenguaje1" => 'Javascript'];

    /* 
        $lenguajes = clave
        'lenguaje1' = llave
        'Javascript' = valor
    */

    echo $lenguajes["lenguaje1"];
?>