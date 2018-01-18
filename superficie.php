<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises ordenados por superficie</title>
  </head>
  <body>
      <a href="continentes.php">Ordenar por continente</a>
      <br>
      <a href="independencia.php">Ordenar por independencia</a>
    <h3>Paises ordenados por su superficie en la tierra:</h3>

    <?php
    // conexion a la bbdd
    $mysqli = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }
        echo "Conexion realizada con exito, figura <br><br>";


    // consulta para mostrar todos los paises ordenados por superficie
    $consulta = $mysqli->query("SELECT * FROM country ORDER BY SurfaceArea DESC");

    //Cuantas filas nos devuelve
  	echo "<br>Los paises de forma ordenada son: ".$consulta->num_rows."<br>";

  	 while($fila=$consulta->fetch_assoc()){
     	  echo "El pais: ".$fila['Name']."<br>";
  	 }

     ?>
  </body>
</html>
