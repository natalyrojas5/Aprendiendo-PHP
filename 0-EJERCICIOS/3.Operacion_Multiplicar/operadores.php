<?php 

  /* FN MULTIPLICAR ------------------- */
  function multiplicar($numero1, $numero2){
    return $numero1 * $numero2;
  }

  /* FN VALIDA SI SON NUMEROS ----------------- */
  function esNumero($numero1, $numero2){
    if(is_numeric($numero1) && is_numeric($numero2)){
      return true;
    }else{
      return false;
    }
  }

  /* FN VALIDA SI LOS CAMPOS ESTEN LLENOS ----------- */
  function validarCamposLlenos($numero1, $numero2){
    if($numero1 !== '' && $numero2 !== ''){
      return true;
    }else{
      return false;
    }
  }

  /* FN MOSTRAR MENSAJE DE ERROR SI INGRESAN TEXTO  -------------- */
  function msjErrorIngresarNros(){
    echo '<div class="message error"><p>Ingrese solo números</p></div>';
  }

   /* FN MOSTRAR MENSAJE DE ERROR SI NO INGRESAN NADA ----------------- */
   function msjErrorCamposVacios(){
     echo '<div class="message error"><p>Ingrese números a multiplicar</p></div>';
   }


   /* FN A CALCULAR MULTIPLICACION ---------------- */
   function calcular(){
   
    if(isset($_POST['numero01']) && isset($_POST['numero02'])){
      $numero1 = $_POST['numero01'];
      $numero2 = $_POST['numero02'];

      if(validarCamposLlenos($numero1, $numero2)){
        if(esNumero($numero1, $numero2)){
          echo '<div class="message success">' . '<p>El resultado es: '. multiplicar($numero1, $numero2) . '</p>' .'</div>';
        }else{
          msjErrorIngresarNros();
        }
      }else{
        msjErrorCamposVacios();
      }
     
    }
   }

?>