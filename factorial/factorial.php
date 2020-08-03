<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Factorial de un número</title>
	<style type="text/css"></style>
</head>

<body>
	<div>
	<?php

	$num1= $_POST["num1"];
	function obtener_factorial($mi_fatorial)
	{
   		if($mi_fatorial==1)
      		return 1;
   		else
      		return $mi_fatorial * obtener_factorial($mi_fatorial-1);
	}
	?>
		<div>
			<h3>El resultado es: <?php echo obtener_factorial($num1);?></h3>
		</div><br>

 		<div>
 			<a href="factorial.html">Volver </a>
 		</div>
	</div>
</body>
</html>