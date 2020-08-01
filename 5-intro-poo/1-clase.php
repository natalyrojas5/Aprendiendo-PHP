<?php
    class Curso{
        public $nombre;
        public $profesor;
        public $disponible;

        // Métodos
        public function imprimirNombreCurso(){
            echo 'El curso es: '. $this->nombre;
        }
    }


    // Instanciando Class Curso

    $php = new Curso();

    /* $php se le asigna sus propiedades y métodos de Curso */
    $php->nombre = 'PHP';
    $php->profesor = 'Yesi';
    $php->disponible = true;

    // var_dump($php);

    echo $php->imprimirNombreCurso();
?>