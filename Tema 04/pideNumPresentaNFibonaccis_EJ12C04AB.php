<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
      <?php  
        echo '<h3>Presenta los X primeros números Fibbonacci: </h3>
            <form action="pideNumPresentaNFibonaccis_EJ12C04AB.php" method="post">
                Introduzca un número de Fibbonaccis que desea: 
                <input type="number" required="required" autofocus name="limite">
                <br/>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </form>';

      $contador = 0;
      $fibonacciA = 0;
      $fibonacciB = 1;
      $fibonacciResultado = 0;
      $limite = $_POST['limite'];

      if (isset($limite)) {
        do {

          echo "$fibonacciResultado, ";

          $fibonacciResultado = $fibonacciA + $fibonacciB;

          $fibonacciA = $fibonacciB;
          $fibonacciB = $fibonacciResultado;

          $contador++;

          if ($contador == 1) {       //Arranque del programa es diferente al resto

            $fibonacciA = 0;
            $contador++;
          }

        } while ($contador <= $limite);
      }
      ?>
</body>
</html>