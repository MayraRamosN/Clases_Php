<?php
/*  FORZAR TIPOS    */

    // $numero es un integer según el contexto  de la asignación
    $numero = 47;
   
    // $var es un boolean al forzar el tipo de  la variable $numero y se le asigna el valor true
    $var = (boolean) $numero;
    var_dump($var);
    echo "<p>";

    // $num es un string según el contexto de  la asignación
    $num = '100';
    echo '<p>'.$num.'<br/>Es de tipo: '.gettype($num).'</p>';
   
    // $num es un integer al forzar el valor
    $num = (int) '100';
    echo '<p>'.$num.'<br/>Es de tipo: '.gettype($num).'</p>';

/* Resultado:
  bool(true)
 
  100
  Es de tipo: string

  100
  Es de tipo: integer
*/
?>
