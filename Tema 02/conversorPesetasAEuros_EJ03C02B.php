<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
		$a = $_GET['pesetas'];
		$resultado = $a / 166.386;
		echo "$a pesetas son: $resultado €";
	?>
</body>
</html>