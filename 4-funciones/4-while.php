<?php

    #### While (Mientras) -------------------
    $i = 1;
    while ($i < 5) {
        echo 'El numero es ' . $i. '<br>';
        $i++;
    }


    #### While (Mientras) -------------------
    $colores = ['Rojo', 'Azul', 'Verde', 'Anaranjado'];

    $salida = 0;
    $i = 0;
    while ($salida != 1) {
        if($colores[$i] == 'Verde'){
            echo 'Mi color favorito es Verde';
            $salida = 1; 
        }else{
            echo 'El color es: '. $colores[$i]. '<br>';
            $i++;
        }
    }

    #### Do While (Hacer - Mientras)

    $num = 10;
    do {
        echo 'Numero ' . $num. '<br>';
        $num++;
    } while ($num < 10);
    
    // --> EJECUTA PRIMERO EL BLOQUE DE CODIGO DENTRO DEL DO {} HASTA QUE SE CUMPLA LA CONDICIÓN DENTRO DEL WHILE
?>