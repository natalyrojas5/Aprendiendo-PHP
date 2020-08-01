<?php

    $calificacion = 15;
    if($calificacion == 20){
        $nota = 'AD';
        $mensaje = 'Excelente';

    /* and o && --> Ambas condiciones deben cumplirse */
    }elseif($calificacion <=18 and $calificacion > 14){
        $nota = 'A';
        $mensaje = 'Bien';

    /* or o || */
    }elseif($calificacion >= 8 or $calificacion < 4){
        $nota = 'B';
        $mensaje = 'Regular';
    }else{
        $nota = 'C';
        $mensaje = 'Reprobado';
    }

    echo 'Saliste '. $mensaje. ' en el exámen, con una nota de '. $nota;

    echo '<br>';

    #Evaluando que un arreglo este lleno
    $arreglo = [15, 20, 5];
    if(empty($arreglo)){
        echo 'Esta vacio';
    }else{
        echo 'Esta lleno';
    }
?>