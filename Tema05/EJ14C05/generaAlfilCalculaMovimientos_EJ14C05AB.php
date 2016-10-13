<!DOCTYPE html>
<html>
<head>
  <!--Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas 
    podría saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el 
    tablero con un color diferente para estas casillas donde puede saltar la figura. El alfil se 
    mueve siempre en diagonal. El tablero cuenta con 64 casillas. Las columnas se indican con las 
    letras de la “a” a la “h” y las filas se indican del 1 al 8.
  -->
  
  <style>
    table, tr, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    
    td {
      width: 5em;
      height: 5em;
    }
    
    .casillaNegra {
      background-color: black;
    }
    
    #marca {
      background-image: url("imagenes/equisRoja.png");
      background-size: 5em 5em;
      background-repeat: no-repeat;
      background-position: 0 0;
    }
    
    #conAlfilBlanco, #conAlfilNegro {
      background-image: url("imagenes/spriteAjedrez.png");
      background-size: 30em 12em;
      background-repeat: no-repeat;
    }
    
    #conAlfilNegro {
      background-position: -159px -103px;
    }
    
    #conAlfilBlanco {
      background-position: -159px -8px;
    }
    
  </style>
  
  <meta charset="UTF-8">
</head>
  <body>
    <table>

    <?php  
    
      /////////////////////// GENERA ARRAY COLOREADO //////////////////////////////////
      $posYAlfil = rand(1, 8);
      $posXAlfil = rand(1, 8);
    
      if (rand(0, 1) == 0) {
        $color = "conAlfilBlanco";
      } else {
        $color = "conAlfilNegro";
      }
      
      for ($fila = 1; $fila <= 8; $fila++) {
        echo '<tr>';
        for ($columna = 1; $columna <= 8; $columna++) {
          if ($fila % 2 != 0) { // Fila impar
            if ($columna % 2 == 0) {
              if ($columna == $posXAlfil && $fila == $posYAlfil) {
                echo '<td id="'.$color.'" class="casillaNegra"></td>';
              } else if (abs($posXAlfil - $columna) == abs($posYAlfil - $fila)) {
                echo '<td id="marca" class="casillaNegra"></td>';
              } else {
                echo '<td class="casillaNegra"></td>';
              }
            } else {
              if ($columna == $posXAlfil && $fila == $posYAlfil) {
                echo '<td id="'.$color.'"></td>';
              } else if (abs($posXAlfil - $columna) == abs($posYAlfil - $fila)) {
                echo '<td id="marca"></td>';
              }  else {
                echo '<td></td>';
              }   
            }
          } else {
            if ($columna % 2 != 0) {
              if ($columna == $posXAlfil && $fila == $posYAlfil) {
                echo '<td id="'.$color.'" class="casillaNegra"></td>';
              } else if (abs($posXAlfil - $columna) == abs($posYAlfil - $fila)) {
                echo '<td id="marca" class="casillaNegra"></td>';
              } else {
                echo '<td class="casillaNegra"></td>';
              }              
            } else {
              if ($columna == $posXAlfil && $fila == $posYAlfil) {
                echo '<td id="'.$color.'"></td>';
              } else if (abs($posXAlfil - $columna) == abs($posYAlfil - $fila)) {
                echo '<td id="marca"></td>';
              } else {
                echo '<td></td>';
              }
            }
          }
        }
        echo '</tr>';
      }
    ?>

    </table>
  </body>
</html>