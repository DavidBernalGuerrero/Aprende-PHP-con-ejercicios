<!DOCTYPE html>
<html>
<head>
  <!--Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
    pares de un color y los impares de otro.-->
  
  <meta charset="UTF-8">
</head>
<body>
      <?php  
      
        $primerElemento = $_GET['num01'];
        
        if (!isset($primerElemento)) {

          echo $conjuntoNumeros.'<br/><form action="#" method="get">
            Introduce 8 números y determinaremos si son <span style="color: red">pares</span> 
              o <span style="color: blue">impares</span>: 
            <br/>
            1º número: <input type="number" autofocus required="required" autofocus name="num01">
            <br/>
            2º número: <input type="number" required="required" autofocus name="num02">
            <br/>
            3º número: <input type="number" required="required" autofocus name="num03">
            <br/>
            4º número: <input type="number" required="required" autofocus name="num04">
            <br/>
            5º número: <input type="number" required="required" autofocus name="num05">
            <br/>
            6º número: <input type="number" required="required" autofocus name="num06">
            <br/>
            7º número: <input type="number" required="required" autofocus name="num07">
            <br/>
            8º número: <input type="number" required="required" autofocus name="num08">
            <br/>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
            </form>';

        } else {
          
          $conjuntoNumeros = [];
          
          for($i = 1; $i <= 8; $i++) {
            $elementoPuntero = 'num0'.$i;
            $conjuntoNumeros[$i] = $_GET[$elementoPuntero];
          }
          
          echo '<h3>Listado de números generados: </h3><br/> [ ';
          for ($i = 1; $i <= count($conjuntoNumeros); $i++) {
            if ($i != count($conjuntoNumeros)) {
              if ($conjuntoNumeros[$i] % 2 == 0) {
                echo '<span style="color: red">'.$conjuntoNumeros[$i].'</span>, ';
              } else {
                echo '<span style="color: blue">'.$conjuntoNumeros[$i].'</span>, ';
              }
            } else {
              if ($conjuntoNumeros[$i] % 2 == 0) {
                echo '<span style="color: red">'.$conjuntoNumeros[$i].'</span> ]';
              } else {
                echo '<span style="color: blue">'.$conjuntoNumeros[$i].'</span> ]';
              }
            }
          }
        }
      
      ?>
</body>
</html>