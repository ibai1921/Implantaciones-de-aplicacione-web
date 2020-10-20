<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Ibai
 *
 */
?>
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
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php

/* suma */
$a = 5;
$b = 4;

$suma= $a + $b;

print "<p>Suma: $a + $b = $suma</p>";
print "<p>Suma: $a + $b = ".$suma."</p>";
print "<p>SUma: $a + $b = $a + $b</p>";
print "<p>Suma: $a + $b = ".($a + $b)."</p>";

/*comentario*/

$texto1 = "!Hola";
$texto2 = "qué tal?";
$texto3  = "Adiós!";


$textoTotal = $texto1." ".$texto2." ".$texto3;

print "<h1>$textoTotal</h1>";

/*medicion*/
$ancho=3;

print "<p>La mesa tiene una anchura de ".$ancho."m.</p>";

/*lista de alumnos*/

$alumnos =["Joseba", "Jon Ander", "Kelya", "Alex"];
print "<p> El primer alumno es: $alumnos[0]</p>";
print "<p> El primer alumno es: $alumnos[1]</p>";

/*matriz*/

$cuadrados = [3 =>9, 5=> 25, 10=> 100];
print "<p>El cuadrado de 3 es $cuadrados[3]</p>";
print "<p>El cuadrado de 5 es $cuadrados[5]</p>";

$edades =["Ibai"=>30, "Joseba"=>32];

print "<p>La edad de Ibai es $edades[Ibai]</p>";

/*aleatorio*/

$aleatorio = rand(1,50);
print "<p>Valor aleatorio entre 1 y 50= $aleatorio</p>";

/*if*/

$a = 8;
$b = 7;

if ( $a==5) {
  print "<p>A es mayor que 5. </p>";
}

elseif ($a<7){
  print "<p>a NO es mayor que 5 y 7 </p>";
}

else {
  print "<p>a NO es mayor que 5 y 7 </p>";
}

/*para repetir*/

for($contador = 1; $contador <=6; $contador++) {
 
  print "<img src='img/dados/$contador.svg'>";

}


$vidas = 5; 
$nombre = "Ibai";
print '<p> hola' .$nombre. '</p>';

print "<p> tienes $vidas vidas. </p>";

/*si queremos que el dolar nos salga sin que nos coja un valor*/

print "<p>la variable se \"especifica\" así \$ dolar </p>"; 

?>
    </tbody>
  </table>

  <footer>
   
  </footer>
</body>
</html>
