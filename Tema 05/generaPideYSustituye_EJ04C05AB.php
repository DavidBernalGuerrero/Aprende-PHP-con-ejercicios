<!DOCTYPE html>
<html>
<head>
  <!--Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
    separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
    cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
    Los números que se han cambiado deben aparecer resaltados de un color diferente.-->
  
	<meta charset="UTF-8">
</head>
<body>
      <?php  
      
        $identificador = $_GET['identificador'];
        $numObjetivo = $_GET['numObjetivo'];
        echo '<h3>Listado de números generados: <br/><br/> [ ';
        
        if (!isset($identificador) && !isset($numObjetivo)) {
          

          for ($i = 0; $i < 100; $i++) {
            $num = rand(0, 20);

            if ($i != 99) {
              $conjuntoNumeros = $conjuntoNumeros . $num . ", ";
            } else {
              $conjuntoNumeros = $conjuntoNumeros . $num . " ]";
            }
          }
          
          

          echo $conjuntoNumeros.'<br/><form action="#" method="get">
                  ¿Qué número desea buscar y sustituir?: 
                  <input type="number" autofocus required="required" autofocus name="identificador" min="0" max="20">
                  <br/>
                  ¿Por qué número desea sustituir todas las concurrencias detectadas?: 
                  <input type="number" required="required" autofocus name="numObjetivo" min="0" max="20">
                  <br/>
                  <input type="hidden" name="conjuntoNumeros" value="'.$conjuntoNumeros.'">
                  <input type="submit" value="Enviar">
                  <input type="reset" value="Borrar">
                  </form>';

        } else {
          
          $conjunto = $_GET['conjuntoNumeros'];
          // Patrón, cadena, sin limitador, sin espacios vacíos.
          $numeros = preg_split("/[\s,\]\[]/", $conjunto, null, PREG_SPLIT_NO_EMPTY); 
          
          for ($i = 0; $i < count($numeros); $i++) {
            if ($i != (count($numeros)-1)) {
              if ($numeros[$i] == $identificador) {
                echo '<span style="color: yellow;">'.$numObjetivo.'</span>, ';
              } else {
                echo $numeros[$i].', ';
              }
            } else {
              if ($numeros[$i] == $identificador) {
                echo '<span style="color: yellow;">'.$numObjetivo.'</span> ]';
              } else {
                echo $numeros[$i].' ]';
              }
            }
          }
        }
      
      ?>
</body>
</html>
