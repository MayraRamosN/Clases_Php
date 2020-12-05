<?php
    $var1 = 0;
    $var2 = "";
    $var3 = null;
    $var4 = -1;
    $var5 = 3;
    $var6 = -4;

    if( $var1 == false )
        echo "(0) es lo mismo que false<br/>";

    if( $var2 == false )
        echo "una cadena vacia es lo mismo que false<br/>";

    if( $var3 == false )
        echo "null es lo mismo que false<br/>";
        
    if( $var4 == true )
        echo "(-1) es lo mismo que true<br/>";
    
    if( $var5 == true )
        echo "(3) es lo mismo que true<br/>";
    
    if( $var6 == true )
        echo "(-4) es lo mismo que true<br/>";
        
    echo "------------------<br/>";
    echo "Fin del ejemplo.";
    ?>