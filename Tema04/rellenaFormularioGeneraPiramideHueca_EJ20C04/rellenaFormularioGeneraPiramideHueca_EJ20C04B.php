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
        height: 30px;
        width: 60px;
    }
</style>
</head>
<body>
	<?php
        $altura = $_POST['altura'];
        $imagen = $_POST['imagen'];
        
        $limiteEspacios = $altura - 1;
        $limiteHorizontal = 1;
        $contadorEspacios = 0;
        $contadorSimbolo = 0;
        $limContEsp = -1;
        $posAltura = 0;
      
      for ($contador = 0; $contador < $altura - 1; $contador++) {
        
        for ($cont = 0; $cont < $limiteEspacios; $cont++) {                                               // Reset externo porque while no resetea en cada iteración
          echo '<div class="imagen"></div>';
        }

        echo '<img src="imagenes/image'.$imagen.'.png" class="imagen">';
        

        $limiteEspacios -= 1;            // Decremento del limite desde arriba
        $contadorEspacios = 0;           // Reset del while

        if (!$posAltura == 0){
          for ($contEsp = 0; $contEsp < $limContEsp; $contEsp++){         // Reset interno dentro del for, cada iteración lo resetea a 0
            echo '<div class="imagen"></div>';
          }
          echo '<img src="imagenes/image'.$imagen.'.png" class="imagen">';
        }
        
        
        echo '</br>';
        $limContEsp += 2;
        $posAltura++;
        // base de la pirámide
      }
      for ($contadorSimbolo = 0; $contadorSimbolo < ($altura * 2 - 1); $contadorSimbolo++){
        echo '<img src="imagenes/image'.$imagen.'.png" class="imagen">';
      }
	?>
</body>
</html>