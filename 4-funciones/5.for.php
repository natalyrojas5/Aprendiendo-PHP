<?php
    ###FOR (PARA)
    /* 
        El for recibe 3 expresiones
        1 expresion -> Evalua la iteración, inicializando los datos
        2 expresion -> Condición
        3 expresion -> Incremento o decremento
    */

    $frutas = array('Manzana', 'Pera', 'Platano', 'Uva', 'Cereza', 'Melocoton', 'Papaya');

    for ($i=0; $i <  count($frutas); $i++) { 
        echo 'La fruta es: ' .$frutas[$i]. '<br>';
    }
?>