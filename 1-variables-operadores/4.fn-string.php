<?php 

  $mensaje = "Yo amo a mis michis";

  /* LONGITUD ------------------ */
  echo strlen($mensaje) . '<br>';

  /* NUMERO DE PALABRAS ----------- */
  echo str_word_count($mensaje) . '<br>';

  /* REVERSA ------------- */
  echo strrev($mensaje) . '<br>';

  /* 
    ENCONTRAR TEXTO 
    ---------------------------
    (Me va devolver la posición en que se encuentra el texto a buscar) 
  */
  echo strpos($mensaje, "michis") . '</br>';

  /* REEMPLAZAR TEXTO ------------- */
  echo str_replace("amo", "adoro", $mensaje) . '</br>';

  /* CONVERTIR EN MINÚSCULAS ------------- */
  echo strtolower($mensaje). '</br>';

  /* CONVERTIR A MAYÚSCULAS ----------- */
  echo strtoupper($mensaje). '</br>';

  /* 
    SUBSTRAER CADENA 
    --------------------- 
    (Se muestra la cadena de texto apartir del indice q le indiquemos )
  */
  echo substr($mensaje, 13). '</br>';

  /* REMOVER ESPACIOS EN BLANCO */
  echo trim('Hola         soy Nataly')
?>