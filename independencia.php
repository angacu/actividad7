<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises dependiendo de la independencia</title>
  </head>
  <body>
      <a href="superficie.php">Ordenar por superficie</a>
      <br>
      <a href="independencia.php">Ordenar por independencia</a>
    <h3>Paises ordenados segun su independencia:</h3>

    <?php
    // conexion a la bbdd
    $mysqli = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }
        echo "Conexion realizada con exito, figura <br><br>";


    // consulta para mostrar todos los paises ordenados por superficie
    $consulta = $mysqli->query("SELECT Name,IndepYear FROM country");

    //Cuantas filas nos devuelve
  	echo "<br>Los paises independientes son: ".$consulta->num_rows."<br>";

  	 while($fila=$consulta->fetch_assoc()){
       echo "<br>El pais: ".$fila['Name']."<br>";
       echo "se independizo en: ".$fila['IndepYear'];

       if ($fila['IndepYear']==null) {
        echo "NO SE HA INDEPENDIZADO";
       }
       echo "<br>";
  	 }
     ?>
  </body>
</html>
