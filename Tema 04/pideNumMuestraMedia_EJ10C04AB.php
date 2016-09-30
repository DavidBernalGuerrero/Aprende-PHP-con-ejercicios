<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
      <?php  
        $numero = $_POST['numero'];
        $numeroTotal = $_POST['numeroTotal'];
        $numDigitos = $_POST['numeroDigitos'];

        if ($numero >= 0) {
            if (isset($_POST['numero'])) {
              $numeroTotal += $numero;
              $numDigitos++;
            }
        } else {
          $resultado = $numeroTotal / $numDigitos;
          echo "La media de todos los números introducidos es: $resultado";
        }
        
        if ((!isset($_POST['numero'])) || ($numero >= 0)) {
          echo '<h3>Calculadora de medias de una serie de números: </h3>
          <form action="pideNumMuestraMedia_EJ10C04AB.php" method="post">
              Introduce un número (introduce un número negativo para finalizar): 
              <input type="number" required="required" name="numero">
              <input type="hidden" required="required" name="numeroTotal" value="'.$numeroTotal.'">
              <input type="hidden" required="required" name="numeroDigitos" value="'.$numDigitos.'">

              <br/>
              <input type="submit" value="Enviar">
              <input type="reset" value="Borrar">
          </form>';
        }
      ?>
</body>
</html>