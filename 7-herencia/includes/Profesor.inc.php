<?php
    class Profesor extends Persona{

        // Sobreescribiendo funcion bienvenida()
        public function bienvenida(){
            if($this->validandoNombre($this->nombre)){
                return "Bienvenido profesor {$this->nombre}";
            }
        }
    }
?>