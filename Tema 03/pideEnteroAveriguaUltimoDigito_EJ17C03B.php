<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$numero = $_POST['numero'];
	
		$digito = $numero % 10;
		
		echo "El último dígito del número $numero es: $digito.";
	?>
</body>
</html>