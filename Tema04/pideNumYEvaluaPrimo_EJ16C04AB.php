<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
      <?php  
      echo '<h3>Evaluador de primos: </h3>
          <form action="pideNumYEvaluaPrimo_EJ16C04AB.php" method="post">
              Introduzca un número que desea comprobar: 
              <input type="number" required="required" min="0" autofocus name="numero">
              <br/>
              <input type="submit" value="Enviar">
              <input type="reset" value="Borrar">
          </form>';

      $contador = 2;
      $primo = true;
      $numeroIntroducido = $_POST['numero'];
      
      while (($contador < $numeroIntroducido) && ($primo)) {          
        //Hacerlo con un while evita el caso del número 2%2
        if ($numeroIntroducido % $contador == 0) {
          $primo = false;
        } else {
          $contador++;
        }
      }
      if (isset($numeroIntroducido)) {
        if ($primo) {
          echo "<h3>El número $numeroIntroducido es primo</h3>";
        } else {
          echo "<h3>El número $numeroIntroducido no es primo.</h3>";
        }
      }
      ?>
</body>
</html>