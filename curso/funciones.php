***********************
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nombre de funciones</title>
</head>

<body>
<h1>Mi nube informática</h1>
<?php
bienvenida();
BIENVENIDA(); // Es correcto ya que los nombres de función son case-insensitive.
# Daría como resultado dos párrafos HTML con el texto Bienvenido a mi web.
?>
</body>
</html>
<?php
function bienvenida() {
echo '<p>Bienvenido a mi web</p>';
}

?>