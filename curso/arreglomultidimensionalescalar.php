<?php
//Multidimensional de índices escalares
$matriz_numeros=[[2,4,6,8],[5,10,15,20],[10,20,30,40]];
?>
<h3>Array Multidimensional de índices escalares</h3>
<pre>
<?php
echo '$matriz_numeros<br>'; // Mostramos nombre del array
print_r($matriz_numeros); // Imprimir estructura y  contenido del array
// Mostramos algunos de los  elementos del array
echo '$matriz_numeros[0][3]  -> '.$matriz_numeros[0][3].'<br>';
echo '$matriz_numeros[1][1]  -> '.$matriz_numeros[1][1].'<br>';
echo '$matriz_numeros[2][2]  -> '.$matriz_numeros[2][2].'<br>';
?>
</pre>