<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio X</h1>

<?php


$tamaño=$_REQUEST['tamano'];
$grosor=$_REQUEST['grosor'];
$color=$_REQUEST['color'];

if($tamaño !=""){
    print "<p>Tamaño introducido</p>";
    }
else{
    print "<p>Tamaño introducido</p>";
    }

if($grosor !=""){
    print "<p>Grosor introducido</p>";
    }
else{
    print "<p>grosor no introducido</p>";
}

print "<svg width=\"400\" height=\"100\">
    <rect width=\"$tamaño\" height=\"$tamaño\" style=\"fill:$color;stroke-width:$grosor;stroke:rgb(0,0,0)\"\">
</svg>";

?>





  <p><a href="formX.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
