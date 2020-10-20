<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Ibai
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>




<body>



  
    
<?php
/*cartas aleatorias*/

$cartas1 = rand(1,10);
$cartas2 = rand(1,10);
$cartas3 = rand(1,10);
print "<img src=\"img/cartas/c$cartas1.svg\">";
print "<img src=\"img/cartas/c$cartas2.svg\">";
print "<img src=\"img/cartas/c$cartas3.svg\">";
print "<p>El más grande es</p>";
if ($cartas1>$cartas2 and $cartas1>$cartas3){
   
    print "<img src=\"img/cartas/c$cartas1.svg\">";

}

elseif ($cartas2>$cartas1 and $cartas2>$cartas3) {

    print "<img src=\"img/cartas/c$cartas2.svg\">";

}

else {print "<img src=\"img/cartas/c$cartas3.svg\">"; }

?>
    </body>
  </table>

  <footer>
   
  </footer>
</body>
</html>