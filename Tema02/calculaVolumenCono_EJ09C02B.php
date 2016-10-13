<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$radio = $_GET['radio'];
		$altura = $_GET['altura'];
		$PI = M_PI; // Constante PI
		$resultado = 1 / 3 * $PI * pow($radio, 2) * $altura;
		echo "$a pesetas son: $resultado €";
	?>
</body>
</html>