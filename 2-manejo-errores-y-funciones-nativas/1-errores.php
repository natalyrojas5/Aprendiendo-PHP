<?php

    #Desactivar toda la notificacion de error
    error_reporting(0);
    $nombre = 'Nataly';

    echo $nombre;
    echo $nombres; #Error : No existe variable


    #E_NOTICE Informa de variables no inicializadas


    #Guardar errores en un log
    /* 
        init_set() -> Permite modificar las configuraciones establecidas en php.ini
        -> Recibe dos argumentos () 
            1. El nombre de la conf. que se realizará 
            2. El nuevo valor que se le asignará
    */
    ini_set("log_error", 1);
    ini_set('error_log', '/errors/php-error.log');
    error_log('Hay un error');
?>