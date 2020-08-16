<?php 
    class Loteria{
        // Propiedades
        public $numero;
        public $intentos;
        public $resultado = false;
        public $intento;

        // Constructor 
        public function __construct($numero, $intentos){
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        // Métodos
        public function sortear(){

                $minimo = $this->numero / 2;
                $maximo = $this->numero * 2;
                for($i = 0; $i <= $this->intentos; $i++){
                    $numAleatorio = rand($minimo, $maximo);
                    $this->intento = $i + 1;
    
                    $this->intentos($numAleatorio);
                    if($this->resultado){
                        break;
                    }
                }

        }

        public function intentos($numAleatorio){
            if($this->numero == $numAleatorio){  
                echo '<p class="text-lg font-bold">'. $this->numero. ' es igual a ' .$numAleatorio. '</p>' ;
                echo '<h3 class="font-bold text-lg text-blue-500">'.'Felicidades, ganaste en el intento ' .$this->intento .'</h3>';
                $this->resultado = true;
        
            }else{
                echo '<p class="text-lg">'. $this->numero. ' no es igual a ' .$numAleatorio.  '</p>';
            }
        }

        // Destructor
        /*
        public function __destruct(){
            if($this->resultado){
                echo 'Felicidades, ganaste en el intento ' .$this->intento;
            }else{
                echo 'Haz perdido en ' .$this->intento;
            }
        }
        */
        
    }

?>