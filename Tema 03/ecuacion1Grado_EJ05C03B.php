<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$valorA = $_POST['a'];
		$valorB = $_POST['b'];
		$valorX = (-$valorB / $valorA);
		
		if ($valorA != 0) {
			echo "El valor de la incógnita X es: $valorX.";
		} else {
			echo "El valor de X es infinito y por tanto no tiene solución exacta."
		}
	?>
</body>
</html>