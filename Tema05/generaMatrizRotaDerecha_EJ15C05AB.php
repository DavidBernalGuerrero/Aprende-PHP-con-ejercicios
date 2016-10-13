<!DOCTYPE html>
<html>
<head>
  <!--Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una 
    posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y 
    debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original 
    como la matriz resultado, ambas con los números convenientemente alineados.
  -->
  
  <style>
    table, tr, td {
      border: 2px solid black;
      border-collapse: collapse;
      text-align: center;
    }
    
    th {
      text-align: center;
    }
    
    td, tr {
      width: 2.5em;
      height: 2.5em;
    }
    
    #origen {
      margin: 2em 0 0 3em;
      float: left;
    }
    
    #resultado {
      margin: 2em 3em 0 0;
      float: right;
    }
    
  </style>
  
  <meta charset="UTF-8">
</head>
  <body>
    <table>

    <?php  
      $arrayOriginal = [12][12];

      for ($y = 0; $y < 12; $y++) {
        for ($x = 0; $x < 12; $x++) {
          $arrayOriginal[$x][$y] = rand(0, 100);
        }
      }

      ////////////////////GENERAR ARRAY BIDIMENSIONAL/////////////////////////////
      echo '<table id="origen">';
      echo '<th colspan="12">ARRAY ORIGINAL</th>';
      
      for ($y = 0; $y < 12; $y++) {
        echo '<tr>';
        for ($x = 0; $x < 12; $x++) {
          echo '<td>'.$arrayOriginal[$y][$x].'</td>';
        }
        echo '</tr>';
      }
      
      echo '</table>';
      
      
      ///////////////////////ROTACION DE LOS ANILLOS//////////////////////////////
      
      $filaInicio = 0;
      $columnaInicio = 0;
      $filaTope = 11;
      $columnaTope = 11;
      $auxiliarNE;
      $auxiliarSE;
      $auxiliarSO;
      $color = 1;

      for ($i = 0; $i < 6; $i++) {

        $auxiliarNE = $arrayOriginal[$filaInicio][$columnaTope];    //guardado de la esquina Superior Der.

        for ($posicion = $columnaTope; $posicion > $columnaInicio; $posicion--) {
          $arrayOriginal[$filaInicio][$posicion] = $arrayOriginal[$filaInicio][$posicion-1];
        } //lado superior

        $auxiliarSE = $arrayOriginal[$filaTope][$columnaTope];    //guardado de la esquina Inferior Der.

        for ($posicion = $filaTope; $posicion > $filaInicio+1; $posicion--) {
          $arrayOriginal[$posicion][$columnaTope] = $arrayOriginal[$posicion-1][$columnaTope];
        } //lado derecho

        $arrayOriginal[$filaInicio+1][$columnaTope] = $auxiliarNE;   //escritura de la esquina Superior Der.
        $auxiliarSO = $arrayOriginal[$filaTope][$columnaInicio];    //guardado esquina Inferior Izq.

        for ($posicion = $columnaInicio; $posicion < $columnaTope; $posicion++) {
          $arrayOriginal[$filaTope][$posicion] = $arrayOriginal[$filaTope][$posicion+1];
        } //lado inferior

        $arrayOriginal[$filaTope][$columnaTope-1] = $auxiliarSE;    //escritura de la esquina Inferior Der.

        for ($posicion = $filaInicio; $posicion < $filaTope; $posicion++) {
          $arrayOriginal[$posicion][$columnaInicio] = $arrayOriginal[$posicion+1][$columnaInicio];
        } //lado izquierdo

        $arrayOriginal[$filaTope-1][$columnaInicio] = $auxiliarSO; //escritura de la esquina Inferior Izq.

        // ajustado de variables para los anillos interiores

        $filaInicio += 1;
        $columnaInicio +=  1;
        $filaTope  -=  1;
        $columnaTope -=  1;

      }

      /////////////////// GENERA ARRAY RESULTADO /////////////////////

      echo '<table id="resultado">';
      echo '<th colspan="12">ARRAY RESULTADO</th>';
      
      for ($y = 0; $y < 12; $y++) {
        echo '<tr>';
        for ($x = 0; $x < 12; $x++) {
          echo '<td>'.$arrayOriginal[$y][$x].'</td>';
        }
        echo '</tr>';
      }
      
      echo '</table>';
    
  
    ?>

    </table>
  </body>
</html>