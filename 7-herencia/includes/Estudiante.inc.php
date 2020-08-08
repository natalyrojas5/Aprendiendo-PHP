<?php
    class Estudiante extends Persona{
        public function __construct($nombre, $apellido, $email){

            #Heredando las propiedades de mi clase padre (Persona)
            parent::__construct($nombre, $apellido, $email);
        }

        public function bienvenida(){
            return "Bienvenido {$this->nombre}, tenemos nuevos cursos para ti";
        }
    }
?>