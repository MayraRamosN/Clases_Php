<?php
//Multidimensional de índices asociativos
$matriz_ciudades=['España'  => ['Valencia','Madrid','Barcelona'],
                    'Francia' => ['Paris',  'Marsella', 'Lion'],
                    'Italia' => ['Roma',  'Nápoles', 'Venecia']];
?>
<h3>Array Multidimensional de índices asociativos</h3>
<pre>
<?php
echo '$matriz_ciudades<br>'; // Mostramos nombre del array
print_r($matriz_ciudades); // Imprimir estructura y  contenido del array
/* Mostramos algunos de los  elementos del array utilizando una
variable índice para acceder a los  elementos */
$indice='España';
echo "\$indice=  $indice<br>".'$matriz_ciudades[$indice][0] -> '.$matriz_ciudades[$indice][0].'<br><br>';
$indice='Francia';
echo "\$indice=  $indice<br>".'$matriz_ciudades[$indice][2] -> '.$matriz_ciudades[$indice][2].'<br>';