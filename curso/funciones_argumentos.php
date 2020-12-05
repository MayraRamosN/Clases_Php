<?php
 /*  ARGUMENTOS
 
Si tenemos una función que recibe tres argumentos: una cadena, un número y otro tipo booleano,
los valores que le pasemos tendrán que ser en ese mismo orden y del mismo tipo.
*/
settype($sbResultado,"string");
function evalua($mensaje, $numero, $estado='') {
    settype($sbCadena,"string");

    $sbCadena  = "El valor de mensaje es:".$mensaje." =><br>";
    $sbCadena .= "El valor de numero es:".$numero." =><br>";
    $sbCadena .= "El valor de estado es:".$estado." =><br>";

    return $sbCadena;
}
$cad="numero negativo";
$num=-100;
$bol=true;

$sbResultado = evalua($bol, $cad, $num); // orden de envío de argumentos ERRONEO

print $sbResultado;
/*echo "<br>";
$sbResultado = evalua($cad, $num, $bol); // orden CORRECTO de envío de argumentos
echo "<br>";
$sbResultado = evalua($cad, $num);   // número de argumentos ERRONEO (falta el tercer argumento)
*/
?>
