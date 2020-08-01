<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php

        $redesSociales = ['Facebook', 'Instagram', 'Twitter'];

        echo '<h1>Redes Sociales</h1>';
        foreach ($redesSociales as $redSocial) {
            echo $redSocial.'<br>';
        }

        /* ARREGLO ASOCIATIVO */
        $frutasColores = ['Manzana'=> 'Rojo', 'Platano' => 'Amarillo', 'Pera' => 'Verde'];

        echo '<h2>Frutas y colores</h2>';
        foreach ($frutasColores as $fruta => $color) {
            
            echo 'La fruta '.$fruta. ' es de color '. $color. '<br>';
        }

    ?>
</body>
</html>