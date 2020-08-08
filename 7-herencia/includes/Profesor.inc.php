<?php
    class Profesor extends Persona{

        // Sobreescribiendo funcion bienvenida()
        public function bienvenida(){
            return "Bienvenido profesor {$this->nombre}";
        }
    }
?>