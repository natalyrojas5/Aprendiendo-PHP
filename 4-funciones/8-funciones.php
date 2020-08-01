<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* 
            FUNCIÓN DE SUMA (parámetro1, parámetro2){
                return parámetro1 + $parámetro2
            }
        
        */

        function sumaNumeros($num1, $num2, $imprimir = false){
            $suma = $num1 + $num2;
            if($imprimir == true){
                echo 'La suma es: '. $suma;
            }else{
                return $suma;
            }
        }
        
        sumaNumeros(20,5, true);

        echo '<br>';


        /* FUNCIÓN ANÓNIMA -------------*/
        $saludo = function($nombre){
            echo 'Hola '. $nombre;
        };

        $saludo('Nataly');
        echo '<br>';


        /* CLOSURE -> FUNCION ANONIMA QUE ESTA ASIGNADA A UNA VARIABLE ---------------*/

        function datosPersona(Closure $persona, $nombre){
            return $persona($nombre);
        }

        $persona = function($nombre){
            return 'Mi nombre es: '. $nombre. '<br>';
        };

        echo datosPersona($persona, 'Nataly');
        echo datosPersona($persona, 'Mariana');

    ?>
</body>
</html>