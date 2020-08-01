<?php
    /* 
        if(condición){    
            Bloque de código 
        }

        --> SI SE CUMPLE LA CONDICIÓN REALIZARÁ EL BLOQUE DE CÓDIGO QUE SE ENCUENTRE DENTRO DEL IF
    */

    $numero = 2;
    if($numero > 1){
        echo '<p> Hola Mundo </p>';
    }

    /*------------------------------------------------------ */

    /* 
        if(condición){
            Bloque de código
        }else{
            Bloque de código
        }

        --> SI LA CONDICIÓN SE CUMPLE REALIZA EL BLOQUE DE CÓDIGO QUE SE ENCUENTRE DENTRO DEL IF,
            EN CASO NO SE CUMPLA REALIZARÁ LO QUE SE ENCUENTRE DENTRO DEL ELSE
    */
    $edad = 21;
    if($edad > 30){
        echo 'Mi edad es: '. $edad .' y es mayor que 30';
    }else{
        echo 'Mi edad es: '. $edad .' y es menor que 30';
    }

    /*------------------------------------------------------ */

    /* Operador ternario */
    $diaCumpleaños = 5;
    $cumple = ($diaCumpleaños === 10) ? 'Su edad es igual a ' : 'Su edad no es igual a ';

    echo '<br>'. $cumple. $diaCumpleaños;
?>