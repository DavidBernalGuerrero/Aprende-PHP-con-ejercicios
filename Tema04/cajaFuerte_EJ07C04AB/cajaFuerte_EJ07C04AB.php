<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
      <?php  
      $numero;
      $combinacion;
      $numeroCorrecto;
      
      echo '<img src="cajafuerte.png" usemap="#mapaVectores">
        <map name="mapaVectores">
          <area shape="rect" coords="" href="cajaFuerte_EJ07C04AB.php?num=1&&combinacion='.$combinacion.'&&
            &&numeroCorrecto='.$numeroCorrecto.'">
        
        /**/
        </map>
      
      ;

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