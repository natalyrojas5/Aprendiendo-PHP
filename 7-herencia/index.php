<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>
<body>
    <?php
        require_once __DIR__ .'/includes/Global.inc.php';

        $estudiante = new Estudiante('Nataly', 'Rojas', 'natalyrojasm5@gmail.com');
        $profesor = new Profesor('Yesi', 'Days', 'yesi@gmail.com');

        echo "<p> {$estudiante->bienvenida()}</p>";
        // echo '<p>' .$profesor->bienvenida() .'</p>';
        echo '<p>' .$profesor->validarCompra() .'</p>';

        // Mostrando const que esta en mi clase padre Persona
        echo '<p>' .$profesor::miNombre .'</p>';
        echo '<p>' .$profesor->validandoNombre('Nataly') .'</p>';

    ?>
</body>
</html>