<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$hora = $_POST['base'];
		if ($hora >= 6 && $hora <= 12) {
			echo "¡Buenos días!";
		} else if ($hora >= 13 && $hora <= 20) {
			echo "¡Buenas tardes!";
		} else if (($hora >= 21 && $hora <= 23) || ($hora >= 0 && $hora < 5) {
			echo "¡Buenas noches!";
		}
	?>
</body>
</html>