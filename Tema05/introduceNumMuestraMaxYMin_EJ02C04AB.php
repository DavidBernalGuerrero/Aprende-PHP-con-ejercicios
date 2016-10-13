 
<!DOCTYPE html>
<html>
  <!--
   * Escribe un programa que pida 10 números por teclado y que luego muestre los
   *números introducidos junto con las palabras “máximo” y “mínimo” al lado del 
   *máximo y del mínimo respectivamente.
   */--> 
<head>
  <meta charset="UTF-8">

  <style>
    .columnas {
      display: inline-block;
      margin: auto 2em;
      background-color: #989898;
      padding: 2em;
      width: 3em;
      text-align: center;
    }
    
    #central {
      border-radius: 50%;
      border-left: 2px dashed black;
      border-right: 2px dashed black;
    }
  </style>
</head>
<body>
  
  <?php  

  
    $maximo = PHP_INT_MAX;
    $minimo = -PHP_INT_MAX;
  
    $num = $_GET['numero'];
    
    if (isset($num)) {
      if ($num > $maximo) {
        $maximo = $num;
      } else if ($num < $minimo) {
        $minimo = $num;
      }
      
      $numeros[$i] = $num;
      
    }
    
    if ($contador == 10) {
      foreach ($numeros as $num) {
        if ($num == $minimo) {
          echo '$num -> Mínimo<br/>';
        } else if ($num == $maximo) {
          echo '$num -> Máximo<br/>';
        } else {
          echo '$num<br/>';
        }
      }
    } else {
      echo '<h3>Calculadora de máximos y mínimos de un conjunto de 10 valores:</h3>
      <form action="introduceNumMuestraMaxYMin_EJ02C04AB.php" method="post">
              Introduce un número: <input type="number" autofocus="autofocus" 
                required="required" name="numero">
              <input type="hidden" name="'.$contador.'">
              <input type="hidden" name="'.$numeros.'">
              <br/>
              <input type="submit" value="Enviar">
              <input type="reset" value="Borrar">
      </form>';
      $contador++;
    }
    
 ?>

</body>
</html>