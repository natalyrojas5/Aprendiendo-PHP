<?php

    class Curso {
        public $publico = 'Publico; POO';
        private $privado = 'Privado: POO';
        protected $protegido = 'Protegido: POO';

        function obtenerMensajePrivado(){
            return $this->privado;
        }
    }

    $POO = new Curso();
    echo '<p>'. $POO->publico .'</p>';
    echo '<p>'. $POO->obtenerMensajePrivado() .'</p>';
    echo '<p>'. $POO->protegido .'</p>';

?>