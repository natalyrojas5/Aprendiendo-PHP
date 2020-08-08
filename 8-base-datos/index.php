<?php
    echo '<h1>Base de Datos</h1>';
    require_once __DIR__. '/includes/conecta.inc.php';

    $conecta = conectar();

    if($conecta == true){
        echo 'Estamos conectados a la BD';
    }
?>