<?php
    /* 
        - Todos los métodos declarados dentro de interface deben ser publicos.
        - No se pueden agregar atributos dentro del interfaces.
        - Las clases que implementen una interfaz deben usar las mismas estructuras de métodos 
            que fueron asignadas en la interfaz, no de cumplirse dará un error.
    */


    interface Requerimiento{
        public function asignarRequerimiento($listado);
        public function obtenerRequerimiento();
        
    }

    # Para implemtar una interfaz en una clase de debe usar el opedorador implements

    class Curso implements Requerimiento{
        private $titulo;
        private $profesor;
        private $duracion;
        private $costo;
        private $disponible;
        public $listado;
        static $moneda = '20';

        #CONSTRUCTOR
        public function __construct($titulo, $profesor, $duracion,  $costo, $disponible){
            $this->titulo = $titulo;
            $this->profesor = $profesor;
            $this->duracion = $duracion;
            $this->costo = $costo;
            $this->disponible = $disponible;
        }

        #ENCAPSULACION
        #GETTER - SETTER

        #GETTER
        public function obtenerTitulo(){
            return $this->titulo;
        }

        public function obtenerProfesor(){
            return $this->profesor;
        }

        #SETTER
        public function asignarTitulo($titulo){
            $this->titulo = $titulo;
        }

        #Implementando los métodos de interface Requerimientos
        public function asignarRequerimiento($listado){
            $this->listado = $listado;
        }
        public function obtenerRequerimiento(){
            if(!empty($this->listado)){
                echo '<h1>Requerimientos</h1>';
                foreach ($this->listado as $lista) {
                    echo '<p>' .$lista. '</p>' ;
                }
            }
        }

        // Obtener atributo estático
        #self se usa para obtener método estáticos
        static function obtenerMoneda(){
            return self::$moneda;
        }
    }
?>