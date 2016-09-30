<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$numero = $_POST['numero'];
                $num = $numero;
                $numDigitos = 0;
                
                while (floor($numero) > 0) {
                    $numero = $numero / 10;
                    $numDigitos++;
                }
		
		echo "El número $num tiene: $numDigitos dígitos.";
	?>
</body>
</html>