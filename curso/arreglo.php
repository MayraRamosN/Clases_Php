<?php
//Para contar los elemento que componen un array utilizamos la función count() indicando como argumento la variable de tipo array.
$numeros=[10,20,30,40];
echo count($numeros); // 4
?>

<br>;
<?php
//Si deseamos contar todos los elementos de un array multidimensional, tendremos que indicar la constante COUNT_RECURSIVE 
//como segundo argumento de la función count().
$matriz_numeros=[[2,4,6,8],[5,10,15,20],[10,20,30,40]];
// 15  (ya que se tienen en cuenta los 3 elementos de la primera dimensión
echo count($matriz_numeros, COUNT_RECURSIVE);
?>