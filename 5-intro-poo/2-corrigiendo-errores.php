<?php
    class TablaM{ 
        public $numero; 
        public $tope;
        public function Resultado(){ 
            for ($i = 0; $i <= $this->tope; $i++){ 
                echo $this->numero. " X " .$i. "= " .$this->numero * $i. '<br>'; 
            } 
        } 
    }

    $result = new TablaM();
    $result->numero = 2;
    $result->tope = 10;
    echo '<h1>Tabla de Multiplicar</h1>';
    echo $result->Resultado();
?>