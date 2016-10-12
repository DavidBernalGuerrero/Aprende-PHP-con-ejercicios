<!DOCTYPE html>
<html>
<head>
  <!--Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
    un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
    array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
    si es necesario.-->
  
	<meta charset="UTF-8">
</head>
<body>
      <?php
      
        for ($i = 0; $i < 20; $i++) {
          $conjuntoNumeros[$i] = rand(0, 100);
        }
          
        $contarLimiteImpares = 0;
        $contarLimitePares = 0;
        
        for ($i = 0; $i < 20; $i++) {
          if ($conjuntoNumeros[$i] % 2 == 0) {
            $arrayOrdenado[] = $conjuntoNumeros[$i];
            $contarLimitePares++;
          } else {
            $arrayImparAux[] = $conjuntoNumeros[$i];
            $contarLimiteImpares++;
          }
        }
        
        for ($i = 0; $i < $contarLimiteImpares; $i++) {
          $arrayOrdenado[] = $arrayImparAux[$i];
        }
        
        echo '<br/> [';
        for ($i = 0; $i < count($arrayOrdenado); $i++) {
          if ($i != count($arrayOrdenado)-1) {
            echo $arrayOrdenado[$i].', ';
          } else {
            echo $arrayOrdenado[$i].' ]';
          }
        }
        
      
      ?>
</body>
</html>


