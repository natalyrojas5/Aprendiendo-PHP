<?php

    #arreglos

    $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];

    /* 
        IMPRIMIR ARREGLOS
        var_dump()
        print_r($arreglo)
    */

    // var_dump($dias[0]);
    // print_r($dias);
    // echo $dias[0];

    // echo '<br>';

    #Agregar valor a un array
    $dias[] = 'Sábado';
    // var_dump($dias);

    // echo '<br>';

    #Agregar valor en un indice en especial (3)
    $dias[3] = 'Feriado';
    // var_dump($dias);

    // echo '<br>';

    /* ARREGLO ASOCIATIVOS -----------------*/
    $misDatos = ['nombre' => 'Nataly', 'edad' =>  21, 'lenguajeFav' => 'Javascript', 'FrameworkFav' => 'React'];
    // var_dump($misDatos);
    // echo '<br>';
    // echo $misDatos['edad'];

    $estudiantes = array("Mariana"=> 18, "Jose"=> 15, "Nataly"=>20);
    foreach ($estudiantes as $estudiante => $nota) {
        echo 'La nota de '. $estudiante . ' es ' . $nota .'</br>';
    }



    /* ARREGLO ASOCIATIVO ----------------- */
    $numeros = array(
        array(1, 33, 41), #Fila
        array(25, 10, 5), #Fila
        array(3, 7, 20), #Fila
        array(19, 49, 2) #Fila
    );
    // echo '<br>';
    echo $numeros[1][2];

    echo '<br>';
    $personas = [
        ['Nataly', 'Christopher'],
        ['Nat', 'Chris'],
        ['Mimi', 'Naia']
    ];

    echo '<br>'.$personas[1][0];


    #Arreglo multidimensional asociativo
    $peliculas = array(
        array('nombre'=> 'Malefica', 'capitulos' => 5),
        array('nombre'=> 'Toy Story', 'capitulos' => 2),
        array('nombre'=> 'Pepa', 'capitulos' => 10)
    );


    echo '<br>'. $peliculas[1]['nombre'];
    
    #Agregar llave y valor
    $peliculas[1]['puntuacionFav'] = 10;
    echo '<br>';
    
    echo $peliculas[1]['puntuacionFav'];
?>