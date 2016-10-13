 
<!DOCTYPE html>
<html>
  <!--
   * Define tres arrays de 20 números enteros cada una, con nombres “numero”, 
   *“cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 
   *100. En el array “cuadrado” se deben almacenar los cuadrados de los valores 
   *que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos 
   *de los valores que hay en “numero”. A continuación, muestra el contenido de
   *los tres arrays dispuesto en tres columnas.
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

    for ($i = 0; $i < 20; $i++) {
      
      $numero[$i] = rand(0, 100);
      $cuadrado[$i] = pow($numero[$i], 2);
      $cubo[$i] = pow($numero[$i], 3);
              
      echo '<div class="columnas">'.$numero[$i].'</div>';
      echo '<div id="central" class="columnas">'.$cuadrado[$i].'</div>';
      echo '<div class="columnas">'.$cubo[$i].'</div><br/>';
    }
    

 ?>

</body>
</html>

