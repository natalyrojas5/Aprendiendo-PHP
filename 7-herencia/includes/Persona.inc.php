<?php
    /* 
        trait -> 
            Permite reutilizar métodos en varias clases.
            No se pueden instanciar como las clases.
    */
    trait Compra{
        public $compra;
        function validarCompra(){
            return 'Su compra a sido exitosa';
        }
    }


    class Persona{
        // Agregando trait Compra
        /* 
            La fn que que esta dentro de mi trait ya se podría usar en mis sub clases 
            Estudiantes, Profesor
        */
        use Compra;

        // Constante en mi superclase Persona
        const miNombre = 'Nataly';


        public $nombre;
        public $apellido;
        public $email;
        /* 
            try{
                // código
                Si algo no se cumple lanza un exception con la palabra reservada throw
                -> throw new Exception('Heey! hay un error')
            }catch(Exception $e){
                Se captura el exception en un objeto ($e) y se muestra el error (getMessage())
                --> echo $e->getMessage();
            }
        */


        /* Método constructor */
        public function __construct($nombre, $apellido, $email){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->validandoNombre($this->nombre);
            $this->validandoEmail($this->email);
        }

        public function validandoNombre($nombre){
            try{
                if( empty ($nombre) ){
                    throw new Exception('Por favor ingrese su nombre');
                }else{
                    return 'Mi nombre es: '.$nombre;
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
        }

        public function validandoEmail($email){
            /*  
                filter_var() -> Filtra una variable con el filtro q se indique
                FILTER_NOMBRE_-VALIDACION
            */

            try {
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    throw new Exception('El email ingresado no es valido');
                }else{
                    return $email;
                }
            }catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function bienvenida(){
            return "Bienvenido {$this->nombre} al mundo de PHP";
        }

        /* 
            final -> palabra reservada que una fn no sea sobreescrita
        */
        final public function despedida(){
            return "Hasta pronto {$this->nombre}";
        }
        
    }
    
?>