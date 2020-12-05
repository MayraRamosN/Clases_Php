<?php
    $contador;
     for($contador=1; $contador <= 5; $contador++ )
    {
        echo "Ahora contador tiene valor [".$contador."]<br/>";
    }
    echo "<p>Terminado</p>";
?>
<br>
<?php
    //Otro ejemplo, en el que el incremento se hace de dos en dos (se mostrarán los números 1, 3, 5):
    $contador;
     for( $contador=1; $contador <= 5; $contador=$contador+2 )
    {
        echo "Ahora contador tiene valor [$contador]<br/>";
    }
    echo "<p>Terminado</p>";
?>
<br>

<?php
    //Otro ejemplo, en el que el incremento se hace de dos en dos (se mostrarán los números 1, 3, 5):
    $contador;
     for( $contador=1; $contador <= 5; $contador=$contador+2 )
    {
        echo "Ahora contador tiene valor [$contador]<br/>";
    }
    echo "<p>Terminado</p>";
?>
<?php
    //Para forzar la salida de un bucle (aunque se cumpla la condición indicada) usaremos break, como puedes ver el siguiente ejemplo:
    $contador;
     for( $contador=1; $contador <= 5; $contador++ )
    {
        echo "Ahora contador vale [".$contador."]<br/>";

   //Cuando la variable '$contador' tenga un valor de 3 se entrará en el if() y al procesar el break se saldrá inmediatamente
//del bucle for() (con lo que sólo se mostrarán los números 1, 2 y 3).
        if( $contador == 3) {
             break;
        }
    }
    echo "<p>Terminado</p>";
?>
<br>
<?php
    //Otra instrucción que podemos usar es continue, con la cual forzamos que se vuelva a evaluar la expresión del bucle
//sin procesar el resto del código del mismo (en este caso usando for() se realiza el incremento de la variable $contador).
//Por ejemplo:
    $contador;
     for( $contador=1; $contador <= 5; $contador++ )
    {
//Cuando la variable '$contador' tenga un valor de 3 se volverá a la línea en que se evalúa el bucle sin procesar el alert(),
//con lo que sólo se mostrarán los números 1, 2, 4 y 5.
        if( $contador == 3 )
             continue;
        echo "Ahora contador vale [".$contador."]<br/>";
    }
    echo "<p>Terminado</p>";
?>
