<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
        /* DEFINIENDO UNA CONSTANTE EN PHP */
        define("constante", "Valor de constante");

        /* IMPRIMIENDO EL VALOR DE LA CONSTANTE *constante* */
        echo constante;

        $nombre = 'Nataly';
        $edad = 21;
        $estadoCivil = false;
        echo '<br>';

        /* MOSTRAR TIPO DE VARIABLE */
        echo gettype($estadoCivil);
        echo '<br>';

        /* ----------------- */
        
        /* TIPO DE VARIABLE, NRO CARACTERES (INTEGER), VALOR DE LA VARIABLES*/
        var_dump($estadoCivil);
        echo '<br>';
        
        $variable = 'Lorem Ipsum';
        /* VALOR POR REFERENCIA (COPIAR VALOR DE LA VARIABLE $variable)*/
        $nuevaVariable = &$variable;
        echo $nuevaVariable;

        $variable = 'Lorem Ipsum 2';
    ?>
</body>
</html>