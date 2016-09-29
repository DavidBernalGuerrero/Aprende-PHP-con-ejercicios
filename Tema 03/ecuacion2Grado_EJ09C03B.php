<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$valorA = $_POST['a'];
		$valorB = $_POST['b'];
		$valorC = $_POST['c'];
		
		$discriminante = pow($valorB, 2) - 4 * $valorA * $valorC;
		
		if ($discriminante >= 0) {
			if ($valorA != 0) {
				$resultadoXpositivo = (- $valorB + (sqrt(($valorB * $valorB) - 4 * 
					$valorA * $valorC))) / (2 * $valorA);
				$resultadoXnegativo = (- $valorB - (sqrt(($valorB * $valorB) - 4 * 
					$valorA * $valorC))) / (2 * $valorA);

				echo "Valor x positivo: $resultadoXpositivo y valor x negativo: $resultadoXnegativo";
			} else {
				echo "Piensa que el valor de 'a' no puede ser negativo.";
			}
		} else {
			echo "No tiene solucion o el número resultante no es real.";
		}
	?>
</body>
</html>