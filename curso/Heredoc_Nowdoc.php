<?php

/*EJEMPLO DE HEREDOC*/

class panaderia
{
    var $panaderia;
    var $ingredientes;

    function panaderia()
    {
        $this->panaderia = 'Panaderia';
        $this->ingredientes = array('Harina', 'Azucar', 'Huevos', 'Mantequilla');
    }
}

$panaderia = new panaderia();
$nombre = 'Torta Casera';

echo <<<Pastel
El nombre de esta receta es: "$nombre". Estoy escribiendo recetas de $panaderia->panaderia.
Ahora, estoy escribiendo un poco sobre los ingredientes para hacer una torta, como lo es {$panaderia->ingredientes[1]}.
Esto debería mostrar una 'P' mayúscula: \x50
Pastel;
?>
<br>
<br>
<br>
<br>
<?php

/*EJEMPLO DE NOWDOC*/

class panaderia_2
{
    public $panaderia_2;
    public $ingredientes;

    function panaderia_2()
    {
        $this->panaderia_2 = 'Panaderia';
        $this->ingredientes = array('Harina', 'Azucar', 'Huevos', 'Mantequilla');
    }
}

$panaderia_2 = new panaderia_2();
$nombre = 'Torta Casera';

echo <<<'Pastel'
El nombre de esta receta es: "$nombre". Estoy escribiendo recetas de $panaderia->panaderia.
Ahora, estoy escribiendo un poco sobre los ingredientes para hacer una torta, como lo es {$panaderia->ingredientes[1]}.
Esto debería mostrar una 'P' mayúscula: \x50
Pastel;

?>
