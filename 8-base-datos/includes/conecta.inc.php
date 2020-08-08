<?php
    function conectar(){
        try {
            $cadena = 'mysql:host=localhost;dbname=bd_pruebas';
            $conexion = new PDO($cadena, 'root', '$godmylife5');

            return true;
            
        } catch (PDOException $e) {
            echo 'ERROR ' . $e->getMessage();
        }
    }
?>