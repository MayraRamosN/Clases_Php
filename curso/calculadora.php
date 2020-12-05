<?php
$ValorA = $_POST["ValorA"];
$ValorB = $_POST["ValorB"];
$ValorOpera = $_POST["opera"];

if(isset($ValorA) && isset ($ValorB) && isset ($ValorOpera)){

    switch ($ValorOpera){
        case "+" :$nuResultado=$ValorA+$ValorB;break;
        case "-" :$nuResultado=$ValorA-$ValorB;break;
        case "*" :$nuResultado=$ValorA*$ValorB;break;
        case "/" :
                    if(($ValorB !== "0")){
                        $nuResultado=$ValorA/$ValorB;
                        break;
                    }else{
                        $nuResultado= "No esta permitida la divisi&oacute;n por CERO";
                    }
    }
    echo "El resultado es:" .$nuResultado;
}
?>
