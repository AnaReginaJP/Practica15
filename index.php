<?php
function calcula_paralaje(){
    $distancia = 2.47e18; // Convertimos la distancia de kilómetros a metros (2.47E15 km * 1000 m/km * 1E3 para convertir a metros)
    $resultado = 1.50e11 / $distancia;
    return $resultado;
}
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Evaluación U3</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">Evaluación</a></h1>
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>¿Cuáles son los ángulos de paralaje? de una estrella cuya distancia respectivas a
          la Tierra es la siguiente: </h2>
        <p>2,47E15 km</p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/esquema.jpeg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        d= d x 10^13<br>
        p= 1,50 x 10 ^11 / d
      </section>
      <section class="datos">
        <h2>Datos:</h2>
          d= 2,47E15 km <br>
          d en metros= 2,47 x 10^18 m<br>
          1 rad= 57.2958 grados 
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a)El paralelaje de los angulos de la estrella es:<br>
        paralelaje, p(rad)= ((1,50 x 10^11)/ (2,47 x 10^18))</p>
        <button onclick="calcula();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
            <?php
            $paralaje = calcula_paralaje();
            echo "El ángulo de paralaje de la estrella es aproximadamente de " . number_format($paralaje, 5, '.', '') . " radianes o " . number_format(rad2deg($paralaje), 4, '.', '') . " grados.";
            ?>
        </div>
      </section>
    </section>
    <footer class="pie">
    </footer>
  </section>
</body>
</html>
