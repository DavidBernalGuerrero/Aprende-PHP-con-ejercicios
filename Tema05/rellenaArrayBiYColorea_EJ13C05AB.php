<!DOCTYPE html>
<html>
<head>
  <!--Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendi-
    dos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
    repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
    cumplan los siguientes requisitos:

      • Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
      • El mínimo debe aparecer en color azul.
      • El resto de números debe aparecer en color negro.
  -->
  
  <style>
    table, tr, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 1em;
    }
    
    #minimo {
      color: blue;
    }
    
    #diagonal {
      color: green;
    }
  </style>
  
  <meta charset="UTF-8">
</head>
  <body>
    <table>

    <?php  
    
      $minimo = PHP_INT_MAX; 

      for ($fila = 0; $fila < 6; $fila++) {
        
        for ($columna = 0; $columna < 9; $columna++) {
          
          do {
            
            $encontrado = true; // Partimos de que vamos a tener suerte y lo vamos a encontrar...
            $numeroCandidato = rand(1, 54); // Número que se pretende probar.
            
            //// Mientras que le número sea repetido y aun no se haya encontrado continua en el bucle.
            for ($comprobandoFila = 0; $comprobandoFila < 6 && $encontrado; $comprobandoFila++) {
              
              if (in_array($numeroCandidato, $array[$comprobandoFila])) {
                $encontrado = false;
              }
              
            }
            
          } while (!$encontrado);
          
          $array[$fila][$columna] = $numeroCandidato;
          
          if ($minimo > min($array[$fila])) {
            $minimo = min($array[$fila]);
            $yNumMin = $fila;
            $xNumMin = $columna;
          }
        }
      }
      
      /////////////////////// GENERA ARRAY COLOREADO //////////////////////////////////
      
      for ($fila = 0; $fila < 6; $fila++) {
        
        echo '<tr>';

        for ($columna = 0; $columna < 9; $columna++) {
          
          if ($array[$fila][$columna] == $minimo) {
            echo '<td id="minimo">'.$array[$fila][$columna].'</td>';
          } else if (abs($xNumMin - $columna) == abs($yNumMin - $fila)) {
            echo '<td id="diagonal">'.$array[$fila][$columna].'</td>';
          } else {
            echo '<td>'.$array[$fila][$columna].'</td>';
          }
          
        }
        
        echo '</tr>';
        
      }
    ?>

    </table>
  </body>
</html>