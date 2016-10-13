<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
            $nota = 0;
            
            if ($_POST['respuesta1'] == "verdadero") {
              $nota++;
            }

            if ($_POST['respuesta2'] == "double") {
              $nota++;
            }

            if ($_POST['respuesta3'] == "cadena") {
              $nota++;
            }

            if ($_POST['respuesta4'] == "falso") {
              $nota++;
            }

            if ($_POST['respuesta5'] == "else") {
              $nota++;
            }

            if ($_POST['respuesta6'] == "falso") {
              $nota++;
            }

            if ($_POST['respuesta7'] == "verdadero") {
              $nota++;
            }

            if ($_POST['respuesta8'] = "f" || $_POST['respuesta8'] == "F") {
              $nota++;
            }
            
            if ($_POST['respuesta9'] == "verdadero") {
              $nota++;
            }
            
            if ($_POST['respuesta10'] == "constante") {
              $nota++;
            }

            echo "Su nota correspondiente es: $nota";
	?>
</body>
</html>