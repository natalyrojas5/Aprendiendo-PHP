<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Programación Orientada a Objetos</title>
</head>
<body>
    <main>
        <h1>POO Avanzado</h1>
        <?php
            define('INC', '/includes/');
            require_once  __DIR__ . INC . 'Curso.php';

            $curso1 = new Curso('PHP', 'Yesi Days', '5 sesiones', 5, true);

            echo $curso1->obtenerTitulo() . '<br>';
            echo $curso1->asignarTitulo('PHP desde Cero');
            echo $curso1->obtenerTitulo();

            echo $curso1->asignarRequerimiento(['Algoritmos', 'Ganas de aprender', 'Actitud', 'Php desde Cero']);
            echo $curso1->obtenerRequerimiento();

            /* Para obtener un método estático no es necesario que sea instanciado */
            echo Curso::obtenerMoneda()
        ?>
    </main>
</body>
</html>