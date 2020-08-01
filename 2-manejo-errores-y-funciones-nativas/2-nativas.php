<?php
    #Arreglos y funciones nativas

    $cadena = '';
    $arreglo= [];

    $misGatos = ['Gringa', 'Mimi', 'Perry', 'Gorda', 'Blanca', 'Negro'];

    // Verificando -------------
    #Vacio - Empty  (Si esta vacío |  true si esta vacio caso contrario false)
    var_dump(empty($arreglo));
    echo '<br>';
    var_dump(empty($misGatos));

    #Exite - isset (Si existe un elemento en un arreglo)
    var_dump(isset($misGatos[6]));

    #Contar elementos de un array
    echo '<br>'. 'Mis gatos son: '. count($misGatos);

    #Antepenúltimo
    $posicion = count($misGatos) - 2;
    echo '<br>'. $misGatos[$posicion];

    #Ordenar de manera alfabetica
    sort($misGatos);
    echo '<br>';
    var_dump($misGatos);

    #Ordenar por indice
    asort($misGatos);

    #Ordenar de manera inversa (Z-A)
    rsort($misGatos);

    #Ordenar de manera inversa sin perder su indice
    arsort($misGatos);


    #Sumar valores del arreglo
    $numeros = [2, 10, 5, 8];
    $sumaResult = array_sum($numeros);
    echo '<br>'. $sumaResult;

    echo '<br>';


    #Encontrar diferencia entre arreglos
    $aulaA = ['a1' => 'Nataly', 'a2' => 'Maria', 'a3' => 'Jose', 'a4' => 'Chris'];
    $aulaB = ['a1' => 'Nataly', 'a2' => 'Maria', 'a3' => 'Jose'];

    $diferenciasArrays = array_diff($aulaA, $aulaB);
    // Devuelve el elemento que no tengo el otro array
    var_dump($diferenciasArrays);
    
    echo '<br>';


    #Divide un array especificando su tamaño
    $dividir = array_chunk($misGatos, 2);
    var_dump($dividir);

    echo '<br>';

    #Divir el arreglo y eliminar el anterior
    // Elimina los dos primeros elementos del array | por el 2 agregado después del arreglo $misGatos
    var_dump(array_slice($misGatos, 2));

    #Unir arreglos
    $hombres = ['Chris','Jose', 'Mario'];
    $mujeres = ['Nataly','Maria', 'Ana'];

    $grupo = array_merge($hombres, $mujeres);
    echo '<br>';
    var_dump($grupo);

    echo '<br>';

    #Eliminar ultimo elemento del arreglo
    array_pop($misGatos);
    var_dump($misGatos);
    echo '<br>';


    #Agregar un elemento al ultimo del arreglo
    array_push($misGatos, 'Blanca');
    var_dump($misGatos);
    echo '<br>';

    
    #Busca un elemento en el arreglo
    $calAlumnos = [5, 10, 3, 1, 9];
    // array_search(Lo que estoy buscando, El arreglo donde voy a buscar)
    $buscar = array_search(3, $calAlumnos); #Devolver el indice donde se encuentre el elemento

    var_dump($buscar)

?>