<?php
$ValorA = $_POST["ValorA"];
$ValorB = $_POST["ValorB"];


if(isset($ValorA) && isset ($ValorB)){
    $nuResultado=   $ValorA - $ValorB;
    echo "El resultado es:" .$nuResultado;
}
?>