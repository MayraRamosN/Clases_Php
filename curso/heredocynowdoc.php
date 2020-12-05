
<?php
/*ejemplo de heredoc*/

$factura = <<<Campos
CREATE TABLE factura
(isdn int PRIMARI KEY,
NOMBRE text,
DIRECCION text,
VALOR int);
Campos;
    echo $factura
?>

<?php
/*ejemplo de nowdoc*/
$factura = <<<'Campos'
CREATE TABLE factura
(isdn int PRIMARI KEY,
NOMBRE text,
DIRECCION text,
VALOR int);
Campos;
    echo $factura
?>