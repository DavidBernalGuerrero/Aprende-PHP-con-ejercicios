<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
    div {
      display: inline-block;
    }
    .imagen {
        margin-left: auto;
        margin-right: auto;
        height: 60px;
        width: 120px;
    }
</style>
</head>
<body>
	<?php
        $altura = $_POST['altura'];
        $imagen = $_POST['imagen'];
        $contador = 0;
        $limiteEspacios = $altura - 1;
        $limiteHorizontal = 1;
        $contadorEspacios = 0;
        $contadorSimbolo = 0;
      
      while ($contador < $altura) {
        
        while ($limiteEspacios > $contadorEspacios) {                                               // Reset externo porque while no resetea en cada iteración
          echo '<div class="imagen"></div>';
          $contadorEspacios++;
        }

        $limiteEspacios -= 1;            // Decremento del limite desde arriba
        $contadorEspacios = 0;           // Reset del while

        for ($contadorSimbolo = 0; $contadorSimbolo < $limiteHorizontal; $contadorSimbolo++){         // Reset interno dentro del for, cada iteración lo resetea a 0
          echo '<img src="imagenes/image'.$imagen.'.png" class="imagen">';
        }
        
        $limiteHorizontal += 2;
        $contador++;
        echo '</br>';
      }
	?>
</body>
</html>