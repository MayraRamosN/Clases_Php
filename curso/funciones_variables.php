<?php
// Las funciones variables no funcionarán con constructores de lenguaje como echo, print, unset(), isset(), empty(),
// include, require y similares. Utilice funciones de envoltura para hacer uso de cualquiera de estos constructores
// como funciones variables.

// Definimos dos funciones para calcular el cuadrado y el doble de un número
function cuadrado($numero) {
return ($numero*$numero);
}
function doble($numero) {
return ($numero*=2);
}

// Asignamos a la variable el nombre de la función que deseamos que represente
$func='doble';
// Invocamos a la función añadiendo paréntesis al nombre de la variable
echo $func(25); // Muestra 50
print "<br>";
$func='cuadrado';
echo $func(8); // Muestra 64
?>
