<?php
/* MANIPULACIÓN DE TIPOS DE DATOS I */

$foo = "0";  // $foo es string (ASCII 48)
var_dump($foo);
echo "<br>";

$foo += 2;   // $foo es ahora un integer (2)
var_dump($foo);
echo "<br>";

$foo = $foo + 1.3;  // $foo es ahora un float (3.3)
var_dump($foo);
echo "<br>";

$foo = 5 + "10 Cerditos pequeñitos"; // $foo es integer (15)
var_dump($foo);
echo "<br>";

$foo = 5 + "10 Cerdos pequeños";     // $foo es integer (15)
var_dump($foo);
?>