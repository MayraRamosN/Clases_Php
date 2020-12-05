
<?php
//Los siguientes ejemplos son idénticos y ambos presentan los números del 1 al 10:
/* ejemplo 1 */

/*$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
//}

//print "|||||||||||"; 

/* ejemplo 2 */

/*
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?> */

settype($nuContador, "Integer");
while ($nuContador<=10){
    echo "El contador es:";
    echo $nuContador++;
    echo "<br>";
}