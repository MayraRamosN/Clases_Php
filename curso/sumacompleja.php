<html>
<body>
<?php
   if(isset($_POST['vec'])){
   
	   $rcVector = $_POST['vec'];
	   $nuCantidad =count($rcVector);
	   $nuSuma =0;
	   for($nuCont=0;$nuCont<$nuCantidad;$nuCont++){
		   echo "$nuCont= $rcVector[$nuCont] <br>";
		   $nuSuma = $nuSuma + $rcVector[$nuCont];
	   }
	   echo "La suma es $nuSuma";
   }
?>


<form  name="form1" action="sumacompleja.php" method="post">
   
<?php
    $nuCantidad = 3;
	for($nuContador=0;$nuContador<=$nuCantidad;$nuContador++){
		echo "$nuContador: <input type='text' name='vec[]' size=10>";
		echo "<br>";
	}
?>
   <input type="submit" value="Sumar">
</form>
</body>
</html>
